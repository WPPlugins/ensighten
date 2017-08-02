<?php 
	/* 
	 * Retrieve information about the user when available
	 */
	function ensightenGenerateUserData($ensightenData){		
		$ensightenData['userAuthenticated'] = is_user_logged_in();
		if(is_user_logged_in()){
			global $current_user;
			wp_get_current_user();
			
			$ensightenData['userWPID'] = $current_user->ID;
			$ensightenData['userName'] = $current_user->user_login;
			$ensightenData['userEmail'] = $current_user->user_email;
		}
		
		return $ensightenData;
	}
	
	/* 
	 * Determine which type of page we're on
	 */
	function ensightenGetPostData($ensightenData){
		//Post Categories. Should always have 1 (UncategoriZed) but failover if needed
		$categories = get_the_category(get_the_ID());
		$categories = is_array($categories) ? $categories : array();
		foreach($categories as &$cat){
			$cat = $cat->slug;
		}
		$ensightenData['postCategories'] = $categories;
		
		//Post Tags. May be an array or boolean (false) so we should failover
		$tags = get_the_tags(get_the_ID());
		$tags = is_array($tags) ? $tags : array();
		
		foreach($tags as &$tag){
			$tag = $tag->slug;
		}
		$ensightenData['Post-Tags'] = $tags;
		
		//Generic Post Information
		$ensightenData['postTitle'] = get_the_title(get_the_ID());
		$ensightenData['postDate'] = get_the_date("", get_the_ID());
		return $ensightenData;
	}
	
	/* 
	 * Determine which type of page we're on
	 */
	function ensightenGetSearchData($ensightenData){
		global $wp_query;
		$ensightenData['searchTerm'] = get_search_query();
		$ensightenData['searchResults Count'] = $wp_query->found_posts;
		
		return $ensightenData;
	}
	
	/* 
	 * Determine which type of page we're on
	 */
	function ensightenGetPageType($ensightenData){
		if ( ( is_single() ) || is_page() ) {
			$ensightenData['pageType'] = get_post_type( get_the_ID() );
			$ensightenData = ensightenGetPostData($ensightenData);
		} else if ( is_category() ) {
			$ensightenData['pageType'] = "category";
		} else if ( is_tag() ) {
			$ensightenData['pageType'] = "tag archive";
		}else if ( is_archive() ) {
			$ensightenData['pageType'] = "archive";
		} else if ( ( is_home() ) || ( is_front_page() ) ) {
			$ensightenData['pageType'] = "home";
		} else if ( is_search() ) {
			$ensightenData['pageType'] = "search";
			$ensightenData = ensightenGetSearchData($ensightenData);
		}
		return $ensightenData;
	}

	/*
	 * Generate a basic data layer array
	 */
	function ensightenGenerateDataLayer($ensightenData) {
		//$ensightenData = array();
		/* Basic data layer about the Site */
		$ensightenData['siteTitle'] = get_bloginfo( 'name' );
		$ensightenData['siteDescription'] = get_bloginfo( 'description' );
		$ensightenData['siteLanguage'] = get_bloginfo( 'language' );
		
		
		
		return $ensightenData;
	}

	/*
	 * Convert the data layer array into a JSON object
	 */
	function ensightenOutputData() {
		$ensightenData = array();
		/* General flag for if the user has configured the data tab themselves */
		$ensightenDataConfigured = get_option( 'ensightenDataConfigured' );
		$ensightenDataSite = get_option( 'ensightenDataSite' );
		$ensightenDataUser = get_option( 'ensightenDataUser' );
		$ensightenDataPage = get_option( 'ensightenDataPage' );
		

		/* Set basic site information */
		if(!isset($ensightenDataConfigured) || !$ensightenDataConfigured){
			$ensightenData = ensightenGenerateDataLayer($ensightenData);
			$ensightenData = ensightenGenerateUserData($ensightenData);
			$ensightenData = ensightenGetPageType($ensightenData);
		}else{
			if(!isset($ensightenDataSite) || $ensightenDataSite == "1"){
				$ensightenData = ensightenGenerateDataLayer($ensightenData);
			}
			/* Set user information */
			if(!isset($ensightenDataUser) || $ensightenDataUser == "1"){
				$ensightenData = ensightenGenerateUserData($ensightenData);
			}
			/* Set page level information */
			if(!isset($ensightenDataPage) || $ensightenDataPage == "1"){
				$ensightenData = ensightenGetPageType($ensightenData);
			}
		}
		/* Encode data object, pretty print if possible */
		if(count($ensightenData) == 0){
			/* Override when there is no data, otherwise this is output as "[]" rather than "{}" */
			$ensightenData = "{}";
		} else if ( version_compare( phpversion(), '5.4.0', '>=' ) ) {
			$ensightenData = json_encode( $ensightenData, JSON_PRETTY_PRINT );
		} else {
			$ensightenData = json_encode( $ensightenData );
		}
		echo "<script type=\"text/javascript\">\nvar ensightenData = {$ensightenData};\n</script>\n";
	}

?>
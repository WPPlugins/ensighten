<div class="wrap">
	<h1 class="ensighten">
		<span class="ensighten-title"><?php _e( 'Ensighten TMS Settings', 'ensighten' ); ?></span>
	</h1>
	<div class="ensighten-in-page-tab"><h2 class="nav-tab-wrapper in-page-tab">
			<?php 
				$tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'basic';
			?>
		<a class="nav-tab <?php if($tab == "basic"){ echo "nav-tab-active"; } ?>" data-tab-slug="ensighten_basic" href="./options-general.php?page=ensighten&amp;tab=basic" title="Basic Settings">Basic Settings</a>
		<a class="nav-tab <?php if($tab == "data"){ echo "nav-tab-active"; } ?>" data-tab-slug="ensighten_data" href="./options-general.php?page=ensighten&amp;tab=data" title="Data Layer Settings">Data Layer Settings</a></h2>
	</div>
		<form method="post" action="options.php">
			<table class="form-table ensighten-section-table">
				<tbody>
					<?php
						if($tab == "basic"){
							wp_nonce_field( 'update-options' );
							settings_fields( 'ensightenTMS' );
					?>
							<tr valign="top" class="ensighten-fieldrow">
								<th>
									<label class="ensighten-field-title" for="basic_ensightenAcct__0" >
										<a id="ensightenAcct"></a>
										<span title="<script src=&quot;//nexus.ensighten.com/YourID/YourSpace/Bootstrap.js&quot;></script>">Account ID</span>
									</label>
								</th>
								<td colspan="1">
									<fieldset class="ensighten-fieldset" data-field_id="basic_ensightenAcct">
										<div class="ensighten-fields" data-type="text" data-largest_index="0" data-field_name_model="Ensighten[basic][ensightenAcct][___i___]" data-field_name_flat="Ensighten|basic|ensightenAcct" data-field_name_flat_model="Ensighten|basic|ensightenAcct|___i___" data-field_tag_id_model="basic_ensightenAcct_____i___" data-field_address="basic|ensightenAcct" data-field_address_model="basic|ensightenAcct|___i___">
											<div data-type="text" class="ensighten-field ensighten-field-text without-nested-fields without-mixed-fields without-child-fields">
												<div class="ensighten-input-label-container ">
													<label for="basic_ensightenAcct__0">
														<input name='ensightenAcct' id='ensightenAcct' size='30' type='text' value='<?php echo get_option( 'ensightenAcct' ); ?>' />
													</label>
												</div>
												<div class="repeatable-field-buttons"></div>
											</div>
										</div>
										<p class="ensighten-fields-description">
											<span class="description">&lt;script src="//nexus.ensighten.com/<b>YourID</b>/YourSpace/Bootstrap.js"&gt;&lt;/script&gt;
											</span>
										</p>
									</fieldset>
								</td>
							</tr>
							<tr valign="top" class="ensighten-fieldrow">
								<th>
									<label class="ensighten-field-title" for="basic_ensightenSpace__0" >
										<a id="ensightenSpace"></a>
										<span title="<script src=&quot;//nexus.ensighten.com/YourID/YourSpace/Bootstrap.js&quot;></script>">Space ID
										</span>
									</label>
								</th>
								<td colspan="1">
									<fieldset class="ensighten-fieldset" data-field_id="basic_ensightenSpace">
										<div class="ensighten-fields" data-type="text" data-largest_index="0" data-field_name_model="Ensighten[basic][ensightenSpace][___i___]" data-field_name_flat="Ensighten|basic|ensightenSpace" data-field_name_flat_model="Ensighten|basic|ensightenSpace|___i___" data-field_tag_id_model="basic_ensightenSpace_____i___" data-field_address="basic|ensightenSpace" data-field_address_model="basic|ensightenSpace|___i___">
											<div data-type="text" class="ensighten-field ensighten-field-text without-nested-fields without-mixed-fields without-child-fields">
												<div class="ensighten-input-label-container ">
													<label for="basic_ensightenSpace__0">
														<input name='ensightenSpace' id='ensightenSpace' size='30' type='text' value='<?php echo get_option( 'ensightenSpace' ); ?>' />
													</label>
												</div>
												<div class="repeatable-field-buttons"></div>
											</div>
										</div>
										<p class="ensighten-fields-description">
											<span class="description">&lt;script src="//nexus.ensighten.com/YourID/<b>YourSpace</b>/Bootstrap.js"&gt;&lt;/script&gt;
											</span>
										</p>
									</fieldset>
								</td>
							</tr>
					
					<?php 
						}else if($tab == "data"){
							wp_nonce_field( 'update-options' );
							settings_fields( 'ensightenTMSData' );
					?>
							<tr id="fieldrow-data_dataConfig" valign="top" class="ensighten-fieldrow">
								<th>
									<label class="ensighten-field-title" for="data_dataConfig__0">
										<a id="dataConfig"></a>
										<span title="">Include Data Elements</span>
									</label>
								</th>
								<td colspan="1">
									<fieldset class="ensighten-fieldset" data-field_id="data_dataConfig">
										<input type="hidden" id="ensightenDataConfigured" value="1" name="ensightenDataConfigured" >
										<div class="ensighten-fields" data-type="checkbox" data-largest_index="0" data-field_name_model="Ensighten[data][dataConfig][___i___]" data-field_name_flat="Ensighten|data|dataConfig" data-field_name_flat_model="Ensighten|data|dataConfig|___i___" data-field_tag_id_model="data_dataConfig_____i___" data-field_address="data|dataConfig" data-field_address_model="data|dataConfig|___i___">
											<div data-type="checkbox" class="ensighten-field ensighten-field-checkbox without-nested-fields without-mixed-fields without-child-fields">
												<div class="ensighten select_all_button_container" onclick="jQuery('.ensightenDataToggle').attr('checked', 'checked'); return false;">
													<a class="select_all_button button button-small">Check All</a>
												</div>
												<div class="ensighten select_none_button_container" onclick="jQuery('.ensightenDataToggle').removeAttr('checked'); return false;">
													<a class="select_all_button button button-small">Uncheck All</a>
												</div>
												<div class="ensighten-checkbox-container-checkbox" data-select_all_button="Check All" data-select_none_button="Uncheck All">
													<div class="repeatable-field-buttons"></div>
													<div class="ensighten-input-label-container ensighten-checkbox-label" style="">
														<label for="ensightenDataSite">
															<span class="ensighten-input-container">
																<input type="checkbox" class="ensightenDataToggle" id="ensightenDataSite" <?php $opt = get_option( 'ensightenDataSite' ); echo ( !isset($opt) || $opt !== "" ? "checked='checked'" : ""); ?> value="1" name="ensightenDataSite" data-id="data_dataConfig__0" class="apf_checkbox" data-id_model="" data-name_model="">
															</span>
															<span class="ensighten-input-label-string">Site Info</span>
														</label>
													</div>
													<div class="ensighten-input-label-container ensighten-checkbox-label" style="">
														<label for="ensightenDataUser">
															<span class="ensighten-input-container">
																<input type="checkbox" class="ensightenDataToggle" id="ensightenDataUser" <?php $opt = get_option( 'ensightenDataUser' ); echo ( !isset($opt) || $opt !== "" ? "checked='checked'" : ""); ?> value="1" name="ensightenDataUser" data-id="data_dataConfig__0" class="apf_checkbox" data-id_model="" data-name_model="">
															</span>
															<span class="ensighten-input-label-string">User Info</span>
														</label>
													</div>
													<div class="ensighten-input-label-container ensighten-checkbox-label" style="">
														<label for="ensightenDataPage">
															<span class="ensighten-input-container">
																<input type="checkbox" class="ensightenDataToggle" id="ensightenDataPage" <?php $opt = get_option( 'ensightenDataPage' ); echo ( !isset($opt) || $opt !== "" ? "checked='checked'" : ""); ?> value="1" name="ensightenDataPage" data-id="data_dataConfig__0" class="apf_checkbox" data-id_model="" data-name_model="">
															</span>
															<span class="ensighten-input-label-string">Page Info</span>
														</label>
													</div>
												</div>
											</div>
										</div>
									</fieldset>
								</td>
							</tr>
					<?php 
						}
					?>
				</tbody>
			</table>

			<p class="submit"><input type="submit" class="button-primary" value="<?php _e( 'Save Changes', 'ensighten' ); ?>" /></p>
		</form>
</div>
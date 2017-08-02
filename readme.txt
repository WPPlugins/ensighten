=== Plugin Name ===
Contributors: ensighten,mattlatimer
Tags: analytics, ensighten, data object, data layer, tms, tag management, cdp
Donate link: http://www.ensighten.com
Requires at least: 2.8
Tested up to: 4.7
Stable tag: 1.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Includes the Ensighten Bootstrap.js and data layer onto your website.

== Description ==

= Features =

Includes the Ensighten Tag Management System on your website with the click of a button.

Optionally enable or disable a data layer to have immediate access to commonly desired information, including:

* Post name
* Post categories
* Post tags
* Search result information
* Site description
* Site name
* Visitor information

= About Ensighten =
Ensighten enables global brands to simplify the management of their data and technology investments so they can orchestrate smarter interactions across touch points. Ensighten offers the industry’s leading enterprise tag management system, featuring patented mobile capabilities, and a powerful, omni-channel data collection service than bridges customer behavior information from web, mobile, digital advertising, Internet of Things (IoT) and offline sources.

Using Ensighten, organizations can accelerate marketing deployments, increase time to revenue, and create holistic, first-party customer profiles that can be used to fuel site personalization, attribution, analytics and other mission-critical use cases. Ensighten’s platform delivers industry best privacy and security safeguards, unparalleled scale and performance, and more than 1,100 turnkey vendor tag integrations. Select customers include CDW, Debenham’s, Hearst Corp., The Home Depot, Microsoft, State Farm, United Airlines, and T-Mobile. 

Ensighten is headquartered in San Jose with offices in London, Sydney and San Diego.


== Installation ==

Simple Installation: 

1. Install from the WordPress Plugin Directory or upload the files to the `/wp-content/plugins/ensighten` directory.
1. Activate Ensighten from the Plugins screen in Admin interface.
1. Click the "Settings" link that appears under the Ensighten Plugin to begin configuration.
1. From the Basic Settings tab enter your Account Id.
1. Save your changes to enable Ensighten on your WordPress site.

Optional Space Configuration:
1. Use the Settings->Ensighten Settings screen to add a Space Id.
1. Enter a Space Id (typically dev, stage, or prod).
1. Save your changes to update the space on your website.

Optional Data Layer Configuration:
1. Use the Settings->Ensighten Settings screen to add a Space Id.
1. Click the Data Layer Settings tab.
1. Toggle data layer sets on or off
1. Save your changes to add or remove data from your data layer.

== Frequently Asked Questions ==

= How is Ensighten included in my site? =

The code is added using Ensighten's best practices allowing you to leverage the built in data layer for thousands of support marketing tags.

= How do I test pending changes to my tags? =

To test a tag changes in another space or tags with committed changes it's recommended that you use our Chrome or Firefox extension.

* [Chrome Extension](https://chrome.google.com/webstore/detail/ensighten-developer-tools/pcpaogkiacmmehpclbomfdhknjmndgpf)
* [Firefox Addon](https://addons.mozilla.org/en-us/firefox/addon/ensighten-developer-tools/)

== Screenshots ==

1. Quickly add Ensighten to your WordPress site by adding your Account Id and Space Id.
2. Optionally enable or disable various information in your data layer.
3. Quickly access commonly requested information from the page.

== Changelog ==

= 1.0.1 =
* Updated where the Bootstrap.js and data layer are added to the head.

= 1.0 =
* Initial Release

== Upgrade Notice ==

= 1.0.1 =
Upgrading will move the data layer and Bootstrap.js installation to the highest point possible in the head, without editing your templates.

= 1.0 =
Initial Release
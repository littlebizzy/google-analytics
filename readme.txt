=== Google Analytics ===

Contributors: littlebizzy
Tags: google, analytics, ga, traffic, code
Requires at least: 4.4
Tested up to: 4.8
Requires PHP: 7.0
Multisite support: No
Stable tag: 1.0.4
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Prefix: GASLBZ

Inserts Google Analytics code just above the closing body tag to ensure fastest performance possible and to avoid conflicting with any other scripts.

== Description ==

Inserts Google Analytics code just above the closing body tag to ensure fastest performance possible and to avoid conflicting with any other scripts.

* [Plugin Homepage](https://www.littlebizzy.com/plugins/google-analytics)
* [Plugin GitHub](https://github.com/littlebizzy/google-analytics)
* [SlickStack.io](https://slickstack.io)

#### The Long Version ####

Although Google (along with most web companies) declares you should load GA in the header, this is actually not necessary and can cause many problems with your website loading speed, JS conflicts (or blocks), and code cleanliness. It is always best (and works totally fine) to load third party scripts LAST, not FIRST, at the very bottom of your source code. This plugin does just that by loading GA code just before the `</body>` closing tag.

#### Compatibility ####

This plugin has been designed for use on LEMP (Nginx) web servers with PHP 7.0 and MySQL 5.7 to achieve best performance. All of our plugins are meant for single site WordPress installations only; for both performance and security reasons, we highly recommend against using WordPress Multisite for the vast majority of projects.

#### Plugin Features ####

* Settings Page: Yes
* Premium Version Available: No
* Includes Media (Images, Icons, Etc): No
* Includes CSS: No
* Database Storage: Yes
  * Transients: No
  * Options: Yes
  * Creates New Tables: No
* Database Queries: Backend + Cached Frontend
* Must-Use Support: Yes (Use With [Autoloader](https://github.com/littlebizzy/autoloader))
* Multisite Support: No
* Uninstalls Data: Yes

#### WP Admin Notices ####

This plugin generates multiple [Admin Notices](https://codex.wordpress.org/Plugin_API/Action_Reference/admin_notices) in the WP Admin dashboard. The first is a notice that fires during plugin activation which recommends several related free plugins that we believe will enhance this plugin's features; this notice will re-appear approximately once every 5 months as our code and recommendations evolve. The second is a notice that fires a few days after plugin activation which asks for a 5-star rating of this plugin on its WordPress.org profile page. This notice will re-appear approximately once every 8 months. These notices can be dismissed by clicking the **(x)** symbol in the upper right of the notice box. These notices may confuse certain users, but are appreciated by the majority of our userbase, who understand that these notices support our free contributions to the WordPress community. If you feel that these notices are too "annoying" than we encourage you to consider one or more of our upcoming premium plugins that combine several free plugin features into a single control panel. Another alternative would be to develop your own plugins for WordPress, if you feel that supporting free plugin authors is not something that interests you.

#### Code Inspiration ####

This plugin was partially inspired either in "code or concept" by the open-source software and discussions mentioned below:

* [WK Google Analytics](https://wordpress.org/plugins/wk-google-analytics/)

#### Recommended Plugins ####

We invite you to check out a few other related free plugins that our team has also produced that you may find especially useful:

* [StatCounter](https://wordpress.org/plugins/sc-littlebizzy/)
* [Force HTTPS](https://wordpress.org/plugins/force-https-littlebizzy/)
* [Server Status](https://wordpress.org/plugins/server-status-littlebizzy/)
* [Duplicate Post](https://wordpress.org/plugins/duplicate-post-littlebizzy/)
* [Export Database](https://wordpress.org/plugins/export-database-littlebizzy/)
* [Disable XML-RPC](https://wordpress.org/plugins/disable-xml-rpc-littlebizzy/)
* [404 To Homepage](https://wordpress.org/plugins/404-to-homepage-littlebizzy/)
* [Remove Category Base](https://wordpress.org/plugins/remove-category-base-littlebizzy/)
* [Maintenance Mode](https://wordpress.org/plugins/maintenance-mode-littlebizzy/)
* [Virtual Robots.txt](https://wordpress.org/plugins/virtual-robotstxt-littlebizzy/)

#### Special Thanks ####

We thank the following groups for their generous contributions to the WordPress community which have particularly benefited us in developing our own free plugins and paid services:

* [Automattic](https://automattic.com)
* [Delicious Brains](https://deliciousbrains.com)
* [Roots](https://roots.io)
* [rtCamp](https://rtcamp.com)
* [WP Tavern](https://wptavern.com)

#### Disclaimer ####

We released this plugin in response to our managed hosting clients asking for better access to their server, and our primary goal will remain supporting that purpose. Although we are 100% open to fielding requests from the WordPress community, we kindly ask that you keep the above mentioned goals in mind, thanks!

== Installation ==

1. Upload the plugin files to `/wp-content/plugins/ga-littlebizzy`
2. Activate via WP Admin > Plugins
3. COnfigure plugin on the settings page at `/wp-admin/options-general.php?page=google-analytics`

== Frequently Asked Questions ==

= How can I change this plugin's settings? =

There is a settings page where you can setup your GA settings. Make sure you clear any caches after that.

= I have a suggestion, how can I let you know? =

Please avoid leaving negative reviews in order to get a feature implemented. Instead, we kindly ask that you post your feedback on the wordpress.org support forums by tagging this plugin in your post. If needed, you may also contact our homepage.

== Changelog ==

= 1.0.4 =
* optimize plugin code
* updated recommended plugins
* added rating request

= 1.0.3 =
* updated recommended plugins

= 1.0.2 =
* added recommended plugins

= 1.0.1 =
* tested with WordPress 4.8

= 1.0.0 =
* initial release

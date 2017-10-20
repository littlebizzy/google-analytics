=== Google Analytics ===
Contributors: littlebizzy
Donate link:
Tags: google, analytics, ga, ganalytics, footer, load, snippet, code, script, JS
Requires at least: 4.4
Tested up to: 4.8
Stable tag: 1.0.1
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Inserts Google Analytics code just above the closing body tag to ensure fastest performance possible and to avoid conflicting with any other scripts.

== Description ==

Inserts Google Analytics code just above the closing body tag to ensure fastest performance possible and to avoid conflicting with any other scripts.

Although Google (along with most web companies) declares you should load GA in the header, this is actually not necessary and can cause many problems with your website loading speed, JS conflicts (or blocks), and code cleanliness. It is always best (and works totally fine) to load third party scripts LAST, not FIRST, at the very bottom of your source code. This plugin does just that by loading GA code just before the `</body>` closing tag.

Compatibility:

* Meant for Linux servers
* Minimum PHP version: 5.4
* Designed for: PHP 7+ and MySQL 5.7+
* Can be used as a "Must Use" plugin (mu-plugins)

Future plugin goals:

* Localization (translation support)
* Database storage experimentation (wp_options, etc)
* More features (based on user suggestions)
* Code maintenance/improvements

Code inspired by:

* [WK Google Analytics](https://wordpress.org/plugins/wk-google-analytics/)

NOTE: We released this plugin in response to our managed hosting clients asking for better access to their server environment, and our primary goal will likely remain supporting that purpose. Although we are 100% open to fielding requests from the WordPress community, we kindly ask that you consider all of the above mentioned goals before leaving reviews of this plugin, thanks!

== Installation ==

1. Upload the plugin files to `/wp-content/plugins/google-analytics-littlebizzy`
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the settings page to input your settings

== Frequently Asked Questions ==

= How can I change this plugin's settings? =

There is a settings page where you can setup your GA settings. Make sure you clear any caches after that.

= I have a suggestion, how can I let you know? =

Please avoid leaving negative reviews in order to get a feature implemented. Instead, we kindly ask that you post your feedback on the wordpress.org support forums by tagging this plugin in your post. If needed, you may also contact our homepage.

== Screenshots ==

== Changelog ==

= 1.0.1 =
* tested with WordPress 4.8

= 1.0 =
* Initial release
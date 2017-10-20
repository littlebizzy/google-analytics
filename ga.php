<?php
/*
Plugin Name: Google Analytics
Plugin URI: https://www.littlebizzy.com/plugins/google-analytics
Description: Inserts Google Analytics code just above the closing body tag to ensure fastest performance possible and to avoid conflicting with any other scripts.
Version: 1.0.1
Author: LittleBizzy
Author URI: https://www.littlebizzy.com
License: GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

/* Initialization */

// Avoid script calls via plugin URL
if (!function_exists('add_action'))
	die;

// This plugin constants
define('GASLBZ_FILE', __FILE__);
define('GASLBZ_PATH', dirname(GASLBZ_FILE));
define('GASLBZ_VERSION', '1.0.0');

// Plugin uninstall hook
register_uninstall_hook(GASLBZ_FILE, 'gaslbz_plugin_uninstall');
function gaslbz_plugin_uninstall() {
	delete_option('gaslbz_settings');
}

// Admin context
if (is_admin()) {

	// Avoid AJAX calls
	if (!(defined('ADMIN_AJAX') && ADMIN_AJAX)) {
		require_once(GASLBZ_PATH.'/admin.php');
		add_action('admin_menu', array('GASLBZ_Admin', 'admin_menu'));
	}

// Front
} elseif (!(defined('DOING_CRON') && DOING_CRON)) {
	require_once(GASLBZ_PATH.'/front.php');
	add_action('wp_footer', array('GASLBZ_Front', 'ga_code'), PHP_INT_MAX);
}
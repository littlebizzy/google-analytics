<?php
/*
Plugin Name: Google Analytics
Plugin URI: https://www.littlebizzy.com/plugins/google-analytics
Description: Inserts Google Analytics code just above the closing body tag to ensure fastest performance possible and to avoid conflicting with any other scripts.
Version: 1.0
Author: LittleBizzy
Author URI: https://www.littlebizzy.com

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

Copyright 2017 by LittleBizzy

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
<?php

/**
 * Google Analytics - Admin class
 *
 * @package Google Analytics
 * @subpackage Google Analytics Admin
 */
class GASLBZ_Admin {



	/**
	 * Admin menu
	 */
	public static function admin_menu() {
		add_submenu_page('options-general.php', 'Google Analytics', 'Google Analytics', 'manage_options', 'google-analytics', array(__CLASS__, 'admin_page'));
	}



	/**
	 * Admin page
	 */
	public static function admin_page() {

		// Check form submit
		if (isset($_POST['gaslbz-nonce'])) {

			// Check valid nonce
			if (!wp_verify_nonce($_POST['gaslbz-nonce'], GASLBZ_FILE)) {
				$error = 'Invalid security code, please try to submit the form again.';

			// Valid
			} else {

				// Initialize
				$settings = array(
					'tracking-code' => trim($_POST['tx-tracking-code']),
					'anonymize-ip'	=> (empty($_POST['ck-anonymize-ip']) || 'on' != $_POST['ck-anonymize-ip'])? '' : 'on',
					'track-logged' 	=> (empty($_POST['ck-track-logged']) || 'on' != $_POST['ck-track-logged'])? '' : 'on',
				);

				// Save data
				update_option('gaslbz_settings', @json_encode($settings));

				// Check missing tracking code
				if (empty($settings['tracking-code']))
					$warning = 'No GA Tracking Code provided';

				// Done
				$success = true;
			}
		}

		// Load current settings
		$settings = @json_decode(''.get_option('gaslbz_settings'), true);
		if (empty($settings) || !is_array($settings))
			$settings = array();

		?><div class="wrap">

			<h1>Google Analytics</h1>

			<form method="post" style="padding-top: 5px;">

				<?php if (isset($success)) : ?><div class="notice notice-success"><p>Data saved successfully. Please <strong>clear your cache</strong> if you are using a caching plugin.</p></div><?php endif; ?>

				<?php if (isset($error)) : ?><div class="notice notice-error"><p><?php echo $error; ?></p></div><?php endif; ?>

				<?php if (isset($warning)) : ?><div class="notice notice-warning"><p><?php echo $warning; ?></p></div><?php endif; ?>

				<input type="hidden" name="gaslbz-nonce" value="<?php echo wp_create_nonce(GASLBZ_FILE); ?>" />

				<p style="margin-bottom: 25px;"><label for="tx-tracking-code" style="display: block; float: left; width: 200px; padding-top: 3px;"><strong style="font-size: 1.1em;">GA Tracking Code</strong></label><input type="text" name="tx-tracking-code" id="tx-tracking-code" value="<?php echo empty($settings['tracking-code'])? '' : esc_attr($settings['tracking-code']); ?>" placeholder="UA-XXXXXXXX-X" /></p>

				<p style="margin-bottom: 35px;"><label for="ck-anonymize-ip" style="display: block; float: left; width: 200px; padding-top: 3px;"><strong style="font-size: 1.1em;">Anonymize IP's</strong></label><input type="checkbox" name="ck-anonymize-ip" id="ck-anonymize-ip" value="on" <?php echo (!empty($settings['anonymize-ip']) && 'on' == $settings['anonymize-ip'])? 'checked' : ''; ?> /></p>

				<p style="margin-bottom: 35px;"><label for="ck-track-logged" style="display: block; float: left; width: 200px;"><strong style="font-size: 1.1em;">Track logged in users</strong></label><input type="checkbox" name="ck-track-logged" id="ck-track-logged" value="on" <?php echo (!empty($settings['track-logged']) && 'on' == $settings['track-logged'])? 'checked' : ''; ?> /></p>

				<p><input type="submit" class="button button-primary" value="Save settings" /></p>

			</form>

		</div><?php
	}



}
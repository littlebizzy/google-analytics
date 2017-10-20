<?php

/**
 * Google Analytics - Front class
 *
 * @package Google Analytics
 * @subpackage Google Analytics Front
 */
class GASLBZ_Front {



	/**
	 * Show the GA code if it proceed
	 */
	public static function ga_code() {

		// Plugin options
		$settings = @json_decode(''.get_option('gaslbz_settings'), true);
		if (empty($settings) || !is_array($settings) || empty($settings['tracking-code']))
			return;

		// Check logged users tracking
		if (is_user_logged_in() && (empty($settings['track-logged']) || 'on' != $settings['track-logged']))
			return;

		// Check IP anonymization
		$anonymize_ip = (!empty($settings['anonymize-ip']) && 'on' == $settings['anonymize-ip'])? "\nga('set', 'anonymizeIp', true);" : '';

		// And show the code
		echo "\n\n<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', '".esc_attr(esc_html($settings['tracking-code']))."', 'auto');".$anonymize_ip."
ga('send', 'pageview');
</script>\n\n";
	}



}
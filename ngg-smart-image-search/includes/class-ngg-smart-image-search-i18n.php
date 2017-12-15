<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://r-fotos.de/wordpress-plugins
 * @since      1.0.0
 *
 * @package    NGG_Smart_Image_Search
 * @subpackage NGG_Smart_Image_Search/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    NGG_Smart_Image_Search
 * @subpackage NGG_Smart_Image_Search/includes
 * @author     Harald R&ouml;h <hroeh@t-online.de>
 */
class NGG_Smart_Image_Search_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'ngg-smart-image-search',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

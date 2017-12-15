<?php

/**
 * Fired during plugin activation
 *
 * @link       https://r-fotos.de/wordpress-plugins
 * @since      1.0.0
 *
 * @package    NGG_Smart_Image_Search
 * @subpackage NGG_Smart_Image_Search/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    NGG_Smart_Image_Search
 * @subpackage NGG_Smart_Image_Search/includes
 * @author     Harald R&ouml;h <hroeh@t-online.de>
 */
class NGG_Smart_Image_Search_Activator {

	/**
	 * Set default settings and create search widget landing page.
	 * Save id, slug, title of landing page in settings.
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		  global $table_prefix, $wpdb;

   	  $hr_SIS_options =  get_option( 'hr_SIS_settings' ) ;
   	  
   	  if ( ( null == $hr_SIS_options ) OR                          //  no options yet defined
   	       ( null == $$hr_SIS_options['search_page_id'] ) )        //  options have been defined, but search page is deleted  	  
   	   {
  	     // no option set yet, init options
  	     $hr_SIS_options = array(
  	         'search_page_id'      => 'not yet defined',
  	         'show_notifications'  => 'both',
  	         'enable_uploader'     => ''
  	     ) ;
  	     update_option( 'hr_SIS_settings', $hr_SIS_options );
   	  }

	}

}

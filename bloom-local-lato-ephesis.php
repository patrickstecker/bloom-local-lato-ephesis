<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Plugin Name: BLOOM - Add Lato and Ephesis locally
 * Plugin URI: https://github.com/patrickstecker/bloom-local-lato-ephesis
 * Description: This Plugin loads the Google Fonts Lato and Ephesis locally, so that your site is GDPR / DSGVO compliant.
 * Version: 1.0.0
 * Author: Bloom Web Agency LLC
 * Author URI: https://bloomwebagency.com/
 */

function bloom_local_lato_ephesis() {
    wp_enqueue_style( 'bloom-local-lato-ephesis', plugin_dir_url( __FILE__ ) . 'lato-ephesis.css', array(), '1.0.0' );
}
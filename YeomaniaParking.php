<?php
/*
Plugin Name: Yeomania RV Parking
Plugin URI: https://github.com/rsdalby/YeomaniaParking
Description: RV Parking plugin for word press
Version: 0.0.1
Author: Steele Dalby
*/

defined( 'ABSPATH' ) or die( "Script must be executed within wordpress.\n" );

class YeomaniaParking{

  function activate() {
    flush_rewrite_rules();
  }  

  function deactivate() {
    flush_rewrite_rules();
  }

  function uninstall() {

  }
}

if ( class_exists( 'YeomaniaParking' ) ) {
  $YeomaniaParking = new YeomaniaParking();
}

register_activation_hook( __FILE__, array( $YeomaniaParking, 'activate' ) );
register_deactivation_hook( __FILE__, array( $YeomaniaParking, 'deactivate' ) );

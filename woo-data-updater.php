<?php
/**
 * Plugin Name: Woo Data Updater
 * Plugin URI: https://github.com/mehulkaklotar/woo-data-updater
 * Description: A woocommerce add on to support data updater with WP-CLI
 * Version: 1.0
 * Author: Mehul Kaklotar
 * Author URI: http://mehulkaklotar.branded.me
 * Requires at least: 4.0
 * Tested up to: 4.3
 *
 * Text Domain: woo-data-updater
 *
 * @package Woo_Data_Updater
 * @category Core
 * @author mehulkaklotar
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! class_exists( 'Woo_Data_Updater' ) ) {

	class Woo_Data_Updater {

		/**
		 * @var string
		 */
		public $version = '1.0';
		/**
		 * @var Woo_Data_Updater The single instance of the class
		 * @since 1.0
		 */
		protected static $_instance = null;

		/**
		 * Main Woo_Data_Updater Instance
		 *
		 * Ensures only one instance of Woo_Data_Updater is loaded or can be loaded.
		 *
		 * @since 0.1
		 * @static
		 * @see woo_data_updater()
		 * @return Woo_Data_Updater - Main instance
		 */
		public static function instance() {
			if ( is_null( self::$_instance ) ) {
				self::$_instance = new self();
			}
			return self::$_instance;
		}

		/**
		 * Cloning is forbidden.
		 * @since 0.1
		 */
		public function __clone() {
			_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?', 'woo-data-updater' ), '1.0' );
		}
		/**
		 * Unserializing instances of this class is forbidden.
		 * @since 2.1
		 */
		public function __wakeup() {
			_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?', 'woo-data-updater' ), '1.0' );
		}

		/**
		 * WooCommerce_Custom_Emails Constructor.
		 */
		public function __construct() {
			add_action( 'init', array( $this, 'init' ) );
		}

		/**
		 * Init WooCommerce when WordPress Initialises.
		 */
		public function init() {

		}

	}

	/**
	 * Returns the main instance of Woo_Data_Updater to prevent the need to use globals.
	 *
	 * @since  0.1
	 * @return Woo_Data_Updater
	 */
	function woo_data_updater() {
		return Woo_Data_Updater::instance();
	}

	woo_data_updater();

}

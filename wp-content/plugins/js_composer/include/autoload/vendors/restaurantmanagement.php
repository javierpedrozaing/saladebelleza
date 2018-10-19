<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * @since 4.4 vendors initialization moved to hooks in autoload/vendors.
 *
 * Used to initialize plugin WooCommerce vendor. (adds tons of WooCommerce shortcodes and some fixes)
 */
add_action( 'plugins_loaded', 'vc_init_vendor_restaurant_management' );
function vc_init_vendor_restaurant_management() {
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); // Require plugin.php to use is_plugin_active() below
	if ( is_plugin_active( 'RestaurantManagement/RestaurantManagement.php' ) || class_exists( 'Restaurant_Management_Plugin' ) ) {
		require_once vc_path_dir( 'VENDORS_DIR', 'plugins/class-vc-vendor-restaurant-management.php' );
		$vendor = new Vc_Vendor_RestaurantManagement();
		add_action( 'vc_after_set_mode', array(
			$vendor,
			'load',
		) );
	}
}

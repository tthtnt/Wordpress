<?php
/**
 * Storefront engine room
 *
 * @package storefront
 */

/**
 * Assign the Storefront version to a var
 */
$theme              = wp_get_theme( 'storefront' );
$storefront_version = $theme['Version'];

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 980; /* pixels */
}

$storefront = (object) array(
	'version' => $storefront_version,

	/**
	 * Initialize all the things.
	 */
	'main'       => require 'inc/class-storefront.php',
	'customizer' => require 'inc/customizer/class-storefront-customizer.php',
);

require 'inc/storefront-functions.php';
require 'inc/storefront-template-hooks.php';
require 'inc/storefront-template-functions.php';

if ( class_exists( 'Jetpack' ) ) {
	$storefront->jetpack = require 'inc/jetpack/class-storefront-jetpack.php';
}

if ( storefront_is_woocommerce_activated() ) {
	$storefront->woocommerce = require 'inc/woocommerce/class-storefront-woocommerce.php';

	require 'inc/woocommerce/storefront-woocommerce-template-hooks.php';
	require 'inc/woocommerce/storefront-woocommerce-template-functions.php';
}

if ( is_admin() ) {
	$storefront->admin = require 'inc/admin/class-storefront-admin.php';

	require 'inc/admin/class-storefront-plugin-install.php';
}

/**
 * NUX
 * Only load if wp version is 4.7.3 or above because of this issue;
 * https://core.trac.wordpress.org/ticket/39610?cversion=1&cnum_hist=2
 */
if ( version_compare( get_bloginfo( 'version' ), '4.7.3', '>=' ) && ( is_admin() || is_customize_preview() ) ) {
	require 'inc/nux/class-storefront-nux-admin.php';
	require 'inc/nux/class-storefront-nux-guided-tour.php';

	if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '3.0.0', '>=' ) ) {
		require 'inc/nux/class-storefront-nux-starter-content.php';
	}
}

/**
 * Note: Do not add any custom code here. Please use a custom plugin so that your customizations aren't lost during updates.
 * https://github.com/woocommerce/theme-customisations
 */

add_action( 'user_register', 'pft_registration_save', 10, 1 );
function pft_registration_save( $user_id ) {
    if ( isset( $_POST['billing_first_name'] ) )
        update_user_meta($user_id, 'billing_first_name', $_POST['billing_first_name']);
    if ( isset( $_POST['billing_last_name'] ) )
        update_user_meta($user_id, 'billing_last_name', $_POST['billing_last_name']);
    if ( isset( $_POST['billing_country'] ) )
        update_user_meta($user_id, 'billing_country', $_POST['billing_country']);
    if ( isset( $_POST['billing_email'] ) )
        update_user_meta($user_id, 'billing_email', $_POST['billing_email']);
    if ( isset( $_POST['billing_company'] ) )
        update_user_meta($user_id, 'billing_company', $_POST['billing_company']);
    if ( isset( $_POST['billing_address_1'] ) )
        update_user_meta($user_id, 'billing_address_1', $_POST['billing_address_1']);
    if ( isset( $_POST['billing_city'] ) )
        update_user_meta($user_id, 'billing_city', $_POST['billing_city']);
    if ( isset( $_POST['billing_state'] ) )
        update_user_meta($user_id, 'billing_state', $_POST['billing_state']);
    if ( isset( $_POST['billing_postcode'] ) )
        update_user_meta($user_id, 'billing_postcode', $_POST['billing_postcode']);
    if ( isset( $_POST['billing_phone'] ) )
        update_user_meta($user_id, 'billing_phone', $_POST['billing_phone']);
}
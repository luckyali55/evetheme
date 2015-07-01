<?php
/**
 * evetheme back compat functionality
 *
 * Prevents evetheme from running on WordPress versions prior to 3.6,
 * since this theme is not meant to be backward compatible and relies on
 * many new functions and markup changes introduced in 3.6.
 *
 * @package WordPress
 * @subpackage evetheme
 * @since evetheme 1.0
 */

/**
 * Prevent switching to evetheme on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since evetheme 1.0
 */
function evetheme_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'evetheme_upgrade_notice' );
}
add_action( 'after_switch_theme', 'evetheme_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * evetheme on WordPress versions prior to 3.6.
 *
 * @since evetheme 1.0
 */
function evetheme_upgrade_notice() {
	$message = sprintf( __( 'evetheme requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'evetheme' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Customizer from being loaded on WordPress versions prior to 3.6.
 *
 * @since evetheme 1.0
 */
function evetheme_customize() {
	wp_die( sprintf( __( 'evetheme requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'evetheme' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'evetheme_customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 3.4.
 *
 * @since evetheme 1.0
 */
function evetheme_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'evetheme requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'evetheme' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'evetheme_preview' );

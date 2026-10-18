<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage architect-designer
 * @since architect-designer 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function architect_designer_customize_register( $wp_customize ) {
	$wp_customize->add_section( new Architect_Designer_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Architect Designer Pro', 'architect-designer' ),
		'button_text'      => __( 'Upgrade Pro', 'architect-designer' ),
		'url'              => 'https://www.wpradiant.net/products/architect-wordpress-theme',
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'architect_designer_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function architect_designer_custom_control_scripts() {
	wp_enqueue_script( 'architect-designer-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
	wp_enqueue_style( 'architect-designer-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'architect_designer_custom_control_scripts' );
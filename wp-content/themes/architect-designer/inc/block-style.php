<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage architect-designer
 * @since architect-designer 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since architect-designer 1.0
	 *
	 * @return void
	 */
	function architect_designer_register_block_styles() {
		

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'architect-designer-border',
				'label' => esc_html__( 'Borders', 'architect-designer' ),
			)
		);

		
	}
	add_action( 'init', 'architect_designer_register_block_styles' );
}
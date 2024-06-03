<?php
/**
 * Declares a block
 *
 * @package bulk
 */

/**
 * Function to be used in the action callback to declare this block.
 */
function child_theme_block_animated_counter_realfix() {
	theme_declare_block(
		array(
			'name'        => 'animated-counter-realfix',
			'title'       => __( 'Animated Counter', 'bulk' ),
			'description' => __( 'Display numbers with a counting up animation.', 'bulk' ),
			'icon'        => 'share-alt2',
			'mode'        => 'edit',
			'align'       => 'full',
			'supports'    => array(
				'align'  => array('full', 'wide'),
				'mode'   => false,
				'anchor' => true,
			),
		)
	);
}

add_action( 'theme_declare_block', 'child_theme_block_animated_counter_realfix', 30 );

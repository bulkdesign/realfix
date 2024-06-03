<?php
/**
 * Declares a block
 *
 * @package bulk
 */

/**
 * Function to be used in the action callback to declare this block.
 */
function child_theme_block_cards_carousel() {
	theme_declare_block(
		array(
			'name'        => 'cards-carousel',
			'title'       => __( 'Cards Carousel', 'bulk' ),
			'description' => __( 'Displays cards in a carousel.', 'bulk' ),
			'icon'        => 'slides',
			'mode'        => 'edit',
			'supports'    => array(
				'align'  => false,
				'mode'   => false,
				'anchor' => true,
			),
		)
	);
}

add_action( 'theme_declare_block', 'child_theme_block_cards_carousel', 30 );

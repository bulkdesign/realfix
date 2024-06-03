<?php
/**
 * Declares a block
 *
 * @package bulk
 */

/**
 * Function to be used in the action callback to declare this block.
 */
function child_theme_block_latest_news_realfix() {
	theme_declare_block(
		array(
			'name'        => 'latest-news-realfix',
			'title'       => __( 'Latest News (Realfix)', 'bulk' ),
			'description' => __( 'Most recent articles for Realfix.', 'bulk' ),
			'icon'        => 'info-outline',
			'mode'        => 'edit',
			'supports'    => array(
				'align'  => true,
				'mode'   => false,
				'anchor' => true,
			),
		)
	);
}

add_action( 'theme_declare_block', 'child_theme_block_latest_news_realfix', 20 );

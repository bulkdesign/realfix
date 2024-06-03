<?php
/**
 * Block: Cards Carousel
 *
 * @package bulk
 */

?>

<section <?php theme_block_attributes( $block, 'cards-carousel' ); ?>>
    <header class="cards-carousel-header" data-animation>
        <?php if ( get_field( 'title' ) ): ?>
        <h2 class="cards-carousel-title">
            <?php the_field( 'title' ); ?>
        </h2>
        <?php endif; ?>

        <?php if ( get_field( 'subtitle' ) ): ?>
        <h3 class="cards-carousel-subtitle">
            <?php the_field( 'subtitle' ); ?>
        </h3>
        <?php endif; ?>

        <?php if ( get_field( 'content' ) ): ?>
        <div class="cards-carousel-text">
            <?php the_field( 'content' ); ?>
        </div>
        <?php endif; ?>

        <?php if( get_field( 'primary_button' ) || get_field( 'secondary_button' ) || get_field( 'tertiary_button' ) ): ?>
        <div class="cards-carousel-buttons">
            <?php $button = get_field( 'primary_button' ); ?>
            <?php if ( ! empty( $button ) ) : ?>
            <a class="primary-button cards-carousel-button" href="<?php echo esc_attr( $button['url'] ); ?>" target="<?php echo esc_attr( theme_get_link_target( $button ) ); ?>" aria-label="<?php echo esc_attr( theme_get_link_aria_label( $button ) ); ?>">
                <?php echo wp_kses_post( $button['title'] ); ?>
            </a>
            <?php endif; ?>

            <?php $button = get_field( 'secondary_button' ); ?>
            <?php if ( ! empty( $button ) ) : ?>
            <a class="secondary-button cards-carousel-button" href="<?php echo esc_attr( $button['url'] ); ?>" target="<?php echo esc_attr( theme_get_link_target( $button ) ); ?>" aria-label="<?php echo esc_attr( theme_get_link_aria_label( $button ) ); ?>">
                <?php echo wp_kses_post( $button['title'] ); ?>
            </a>
            <?php endif; ?>

            <?php $button = get_field( 'tertiary_button' ); ?>
            <?php if ( ! empty( $button ) ) : ?>
            <a class="tertiary-button cards-carousel-button" href="<?php echo esc_attr( $button['url'] ); ?>" target="<?php echo esc_attr( theme_get_link_target( $button ) ); ?>" aria-label="<?php echo esc_attr( theme_get_link_aria_label( $button ) ); ?>">
                <?php echo wp_kses_post( $button['title'] ); ?>
            </a>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </header>
    <?php if ( have_rows( 'cards') ) : ?>
    <div class="cards-carousel-list-wrapper">
        <div class="swiper cards-carousel-list" data-loop="<?php the_field( 'enable_carousel_loop' ); ?>" data-autoplay="<?php the_field( 'enable_carousel_autoplay' ); ?>">
            <div class="swiper-wrapper">
                <?php while ( have_rows( 'cards' ) ) : ?>
                    <?php the_row(); ?>
                    <div class="swiper-slide">
                        <div class="cards-carousel-list-item">
                            <?php $image = get_sub_field( 'image' ); ?>
                            <?php if ( ! empty( $image ) ) : ?>
                                <div class="cards-carousel-item-image">
                                    <?php if( 'image/svg+xml' === $image['mime_type'] ): ?>
                                        <?php 
                                            // phpcs:ignore
                                            echo file_get_contents( get_attached_file( $image['ID'] ) );
                                        ?>
                                    <?php else: ?>
                                        <?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <?php if ( ! empty( get_sub_field( 'title_second_line' ) || get_sub_field( 'title_second_line' ) || get_sub_field( 'description' ) ) ): ?>
                                <div class="cards-carousel-item-info">
                                    <?php if ( ! empty( get_sub_field( 'title_first_line' ) ) ): ?>
                                        <h3><?php the_sub_field( 'title_first_line' ); ?></h3>
                                    <?php endif; ?>

                                    <?php if ( ! empty( get_sub_field( 'title_second_line' ) ) ): ?>
                                        <h3><span class="second-line"><?php the_sub_field( 'title_second_line' ); ?></h3>
                                    <?php endif; ?>

                                    <?php if ( ! empty( get_sub_field( 'description' ) ) ): ?>
                                        <div class="cards-carousel-item-description">
                                            <?php the_sub_field( 'description' ); ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php $link = get_sub_field( 'link' ); ?>
                                    
                                    <?php if( ! empty( $link ) ) : ?>
                                        <a href="<?php echo esc_attr( $link['url'] ); ?>" class="primary-button" title="<?php echo esc_attr( $link['title'] ); ?>" aria-label="<?php echo esc_attr( theme_get_link_aria_label( $link ) ); ?>" target="<?php echo esc_attr( theme_get_link_target( $link ) ); ?>">
                                            <?php echo esc_attr( $link['title'] ); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        
        <?php $cards = get_field( 'cards' ); ?>
        <?php if ( count( $cards ) > 1 ): ?>
            <?php if ( get_field( 'enable_carousel_pagination' ) ) : ?>
            <div class="cards-carousel-pagination" role="presentation" data-animation></div>
            <?php endif; ?>
            <?php if ( get_field( 'enable_carousel_navigation' ) ) : ?>
            <div class="cards-carousel-navigation" data-animation>
                <button class="cards-carousel-navigation-prev" aria-label="<?php esc_attr_e( 'Previous Logo', 'bulk' ); ?>" title="<?php esc_attr_e( 'Previous Logo', 'bulk' ); ?>">
                    <?php theme_block_asset( 'img/nav-button-left.svg' ); ?>
                </button>
                <button class="cards-carousel-navigation-next" aria-label="<?php esc_attr_e( 'Next Logo', 'bulk' ); ?>" title="<?php esc_attr_e( 'Next Logo', 'bulk' ); ?>">
                    <?php theme_block_asset( 'img/nav-button-right.svg' ); ?>
                </button>
            </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    <?php endif; ?>
</section>
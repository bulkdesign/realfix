<?php
/**
 * Block: Animated Counter
 *
 * @package bulk
 */

?>

<section <?php theme_block_attributes( $block, 'animated-counter-realfix' ); ?> data-color-scheme="<?php the_field( 'color_scheme' ); ?>">
    <div class="animated-counter-realfix-wrapper">
        <?php $background = get_field( 'background_image' ); ?>
        <?php if ( ! empty( $background ) ) : ?>
        <div class="animated-counter-realfix-media" data-animation>
            <div class="animated-counter-realfix-image">
                <?php echo wp_get_attachment_image( $background['ID'], 'full' ); ?>
            </div>
        </div>
        <?php endif; ?>

        <div class="animated-counter-realfix-content" data-layout="<?php the_field( 'layout' ); ?>">
            <div class="animated-counter-realfix-content-heading" data-animation>

                <?php if ( get_field( 'title' ) ): ?>
                <h2 class="animated-counter-realfix-title">
                    <?php the_field( 'title' ); ?>
                </h2>
                <?php endif; ?>

                <?php if ( get_field( 'subtitle' ) ): ?>
                <h3 class="animated-counter-realfix-subtitle">
                    <?php the_field( 'subtitle' ); ?>
                </h3>
                <?php endif; ?>
            </div>
            <div class="animated-counter-realfix-content-body" data-animation>
                <?php if ( get_field( 'content' ) ): ?>
                <div class="animated-counter-realfix-text">
                    <?php the_field( 'content' ); ?>
                </div>
                <?php endif; ?>

                <?php if( have_rows( 'item' ) ): ?>
                <dl class="animated-counter-realfix-items">
                    <?php while( have_rows( 'item' ) ): ?>
                        <?php the_row(); ?>
                        <div>
                            <dt>                            
                                <?php if( !empty( get_sub_field( 'prefix' ) || get_sub_field( 'number' ) ) ): ?>
                                    <h4><?php the_sub_field( 'prefix' ); ?><span data-target="<?php the_sub_field( 'number' ); ?>" class="animated-counter-realfix-number">0</span></h4>
                                <?php endif; ?>

                                <hr>
                                
                                <?php if( !empty( get_sub_field( 'title' ) ) ): ?>
                                    <p><?php the_sub_field( 'title' ); ?></p>
                                <?php endif; ?>
                            </dt>
                            <?php if( get_sub_field( 'description') && get_sub_field( 'button' ) ): ?>
                                <dd>
                                    <?php the_sub_field( 'description' ); ?>

                                    <?php $button = get_sub_field( 'button' ); ?>
                                    <?php if ( ! empty( $button ) ) : ?>
                                    <a class="animated-counter-realfix-details-button" href="<?php echo esc_attr( $button['url'] ); ?>" target="<?php echo esc_attr( theme_get_link_target( $button ) ); ?>" aria-label="<?php echo esc_attr( theme_get_link_aria_label( $button ) ); ?>">
                                        <?php echo wp_kses_post( $button['title'] ); ?>
                                    </a>
                                    <?php endif; ?>
                                </dd>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </dl>
                <?php endif; ?>
            </div>
        </div>
        <div class="animated-counter-realfix-content-image">
            <?php $image = get_field( 'image' ); ?>
            <?php if ( ! empty( $image ) ) : ?>
                <?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?>
            <?php endif; ?>
        </div>
    </div>
</section>
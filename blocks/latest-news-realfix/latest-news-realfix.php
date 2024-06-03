<?php
/**
 * The block code
 *
 * @package bulk
 */

?>

<section <?php theme_block_attributes( $block, 'latest-news-realfix' ); ?>>
    <div class="latest-news-realfix-wrapper">

        <?php if ( ! empty( get_field('title') ) ): ?>
            <h2><?php echo get_field('title'); ?></h2>
        <?php endif; ?>

        <?php if ( ! empty( get_field('subtitle') ) ): ?>
            <p><?php echo get_field('subtitle'); ?></p>
        <?php endif; ?>

        <div class="news">

            <?php
            $args = array( 
                'post_type'      => array( 'post'),
                'post_status'    => 'publish',
                'posts_per_page' => 3,
                'orderby'        => 'date',
                'order'          => 'DESC',
                'tax_query' => array(
                    array(
                    'taxonomy' => 'category',
                    'terms' => get_field('featured_categories')
                    )
                )
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                }
                wp_reset_postdata();
            }

            $query = new WP_Query( $args );
            ?>

            <?php if ( $query->have_posts() ) : ?>
                <div class="latest-news-realfix-list-wrapper">
                    <?php while ( $query->have_posts() ) : ?>
                        <?php $query->the_post(); ?>
                            <div class="latest-news-realfix-item">
                                <?php $featured_image = get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>
                                <?php $featured_image_alt = get_post_meta($featured_image , '_wp_attachment_image_alt', true); ?>

                                <?php if ( ! empty( $featured_image ) ) : ?>
                                    <a class="news-wrapper-featured" href="<?php echo get_permalink(); ?>">
                                        <img src="<?php echo $featured_image; ?>" alt="<?php echo $featured_image_alt; ?>" title="<?php the_title(); ?>">
                                    </a>
                                <?php endif; ?>

                                <a href="<?php the_permalink(); ?>">
                                    <h3><?php the_title(); ?></h3>
                                </a>
                                
                                <p class="excerpt">
                                    <?php echo get_the_excerpt(); ?>
                                </p>

                                <a class="tertiary-button" href="<?php the_permalink(); ?>">
                                    <?php echo esc_attr('Leia mais...', 'bulk'); ?>
                                </a>
                            </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

        </div>

        <?php $button = get_field( 'primary_button' ); ?>
        <?php if ( ! empty( $button ) ) : ?>
        <a class="primary-button all-news" href="<?php echo esc_attr( $button['url'] ); ?>" target="<?php echo esc_attr( theme_get_link_target( $button ) ); ?>" aria-label="<?php echo esc_attr( theme_get_link_aria_label( $button ) ); ?>">
            <?php echo wp_kses_post( $button['title'] ); ?>
        </a>
        <?php endif; ?>
    </div>

</section>
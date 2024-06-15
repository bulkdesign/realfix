<?php /* Template Name: Padrões */

get_header(); ?>

	<div class="default-template">

		<?php while ( have_posts() ) : the_post(); ?>

		<div class="blocks-container">
			<div class="alignwide">
				<div class="accordion-item">
					<h3 class="center cinza-bon-text f35 f23m mg80"><?php the_title(); ?></h3>
					<ul class="collapsible">

						<?php $padroes = array('post_type' => 'padroes', 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc');
						$padroes = new WP_Query( $padroes );
						if ( $padroes->have_posts() ) {
							while ( $padroes->have_posts() ) : $padroes->the_post(); ?>

								<details>
									<summary>
										<?php the_title(); ?>
									</summary>
									<div>
										<a target="_blank" href="<?php the_field('arquivo'); ?>">Clique aqui para acessar</a>
									</div>
								</details>

							<?php endwhile; }
							else {
								echo "Não há conteúdos.";
							}
							wp_reset_query();
							?>
					</ul>				
				</div>
			</div>
		</div>

		<?php endwhile; ?>
	</div>

<?php get_footer(); ?>
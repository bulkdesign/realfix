<?php /* Template Name: Linha Piso */

get_header(); ?>

	<div class="default-template">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php $linhaPiso = array('post_type' => 'page', 'p' => 7972, 'posts_per_page' => 1, 'post_status' => 'publish', 'order' => 'asc');
				$linhaPiso = new WP_Query( $linhaPiso );
					if ( $linhaPiso->have_posts() ) {
						while ( $linhaPiso->have_posts() ) : $linhaPiso->the_post(); ?>

							<div class="blocks-container">
								<div class="alignwide">
									<div class="col s12 center pt50 pt30m">
										<h3 class="vermelho-bon-text f30"><?php the_title(); ?></h3>
									</div>
								</div>
							</div>

						<?php endwhile; }
					else {
						echo "Não há slides.";
				}
				wp_reset_query();
			?>
			
		<?php endwhile; ?>

		<div class="blocks-container">
			<div class="alignwide">
				<div class="accordion-item">	
					<ul class="collapsible">

						<?php $linhaPiso = array('post_type' => 'linha-piso', 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc');
						$linhaPiso = new WP_Query( $linhaPiso );
						if ( $linhaPiso->have_posts() ) {
							while ( $linhaPiso->have_posts() ) : $linhaPiso->the_post(); ?>

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

	</div>

<?php get_footer(); ?>
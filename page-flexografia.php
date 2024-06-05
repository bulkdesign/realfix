<?php /* Template Name: Tintas Flexográficas */

get_header(); ?>

	<div class="default-template">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php $tintasindustriais = array('post_type' => 'page', 'p' => 4620, 'posts_per_page' => 1, 'post_status' => 'publish', 'order' => 'asc');
				$tintasindustriais = new WP_Query( $tintasindustriais );
					if ( $tintasindustriais->have_posts() ) {
						while ( $tintasindustriais->have_posts() ) : $tintasindustriais->the_post(); ?>

							<div class="blocks-container">
								<div class="alignwide">
									<div class="col s12 center pt50 pt30m">
										<h3 class="vermelho-bon-text f30"><?php the_title(); ?></h3>
									</div>
									<div class="col s12 m8 push-m2 pb30 pb0m">
										<p class="center"><?php the_field('descricao'); ?></p>
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
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">

						<?php $flexografia = array('post_type' => 'flexografia', 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc');
						$flexografia = new WP_Query( $flexografia );
						if ( $flexografia->have_posts() ) {
							while ( $flexografia->have_posts() ) : $flexografia->the_post(); ?>

								<details>
									<summary>
										<?php the_title(); ?>
									</summary>
									<div>
										<p><strong>Descrição:</strong> <?php the_field('descricao'); ?></p>
										<a target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Clique aqui para acessar</a>
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
<?php /* Template Name: Especialidades */

get_header(); ?>

	<div class="default-template">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php $tintas_especialidades = array('post_type' => 'page', 'p' => 4618, 'posts_per_page' => 1, 'post_status' => 'publish', 'order' => 'asc');
				$tintas_especialidades = new WP_Query( $tintas_especialidades );
					if ( $tintas_especialidades->have_posts() ) {
						while ( $tintas_especialidades->have_posts() ) : $tintas_especialidades->the_post(); ?>

							<div class="blocks-container">
								<div class="alignwide">
									<div class="col s12 center pt50 pt30m">
										<h3 class="vermelho-bon-text f30"><?php the_title(); ?></h3>
									</div>
									<div class="col s12 m8 push-m2 pb30 pb0m">
										<p class="center text-center-m"><?php the_field('descricao'); ?></p>
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

						<?php $especialidades = array('post_type' => 'especialidades', 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc');
						$especialidades = new WP_Query( $especialidades );
						if ( $especialidades->have_posts() ) {
							while ( $especialidades->have_posts() ) : $especialidades->the_post(); ?>

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
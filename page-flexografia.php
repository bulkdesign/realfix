<?php /* Template Name: Tintas Flexográficas */

get_header(); ?>

	<div class="default-template">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php $flexografia = array('post_type' => 'page', 'p' => 4620, 'posts_per_page' => 1, 'post_status' => 'publish', 'order' => 'asc');
				$flexografia = new WP_Query( $flexografia );
					if ( $flexografia->have_posts() ) {
						while ( $flexografia->have_posts() ) : $flexografia->the_post(); ?>

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
				<?php 
				$categories = array(
					'flexografia' => 'Flexografia'
				);

				function render_category($post_type, $title) {
					$query_args = array(
						'post_type' => $post_type,
						'posts_per_page' => -1, 
						'post_status' => 'publish', 
						'order' => 'asc'
					);
					$query = new WP_Query($query_args);
					if ($query->have_posts()) {
						echo '<div class="accordion-item"><ul class="collapsible">';

						while ($query->have_posts()) {
							$query->the_post();
							echo '<details><summary>' . get_the_title() . '</summary><div><a target="_blank" href="' . get_field('boletim_tecnico', get_the_ID()) . '" title="' . get_the_title() . '">Clique aqui para acessar</a></div></details>';
						}

						echo '</ul></div>';
					} else {
						echo '<div class="accordion-item"><ul class="collapsible">';
						echo '<details><summary>' . $title . '</summary><div><p>Não há conteúdos.</p></div></details>';
						echo '</ul></div>';
					}
					wp_reset_query();
				}

				foreach ($categories as $post_type => $title) {
					render_category($post_type, $title);
				}
				?>
			</div>
		</div>

	</div>

<?php get_footer(); ?>
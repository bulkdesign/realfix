<?php /* Template Name: Tintas Madeira */

get_header(); ?>

	<div class="default-template">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php $tintasmadeira = array('post_type' => 'page', 'p' => 4615, 'posts_per_page' => 1, 'post_status' => 'publish', 'order' => 'asc');
				$tintasmadeira = new WP_Query( $tintasmadeira );
					if ( $tintasmadeira->have_posts() ) {
						while ( $tintasmadeira->have_posts() ) : $tintasmadeira->the_post(); ?>

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
					'acabamentos-madeira' => 'Acabamentos',
					'fillers-madeira' => 'Fillers',
					'impermeabilizantes-madeira' => 'Impermeabilizantes',
					'massas-madeira' => 'Massas',
					'primers-madeira' => 'Primers',
					'seladores-madeira' => 'Seladores',
					'tingidores-madeira' => 'Tingidores',
					'vernizes-madeira' => 'Vernizes'
				);

				function render_category($term, $title) {
					$query_args = array(
						'post_type' => 'tintas_madeira',
						'tax_query' => array(
							array(
								'taxonomy' => 'categorias_madeira',
								'field'    => 'slug',
								'terms'    => $term,
							),
						), 
						'posts_per_page' => -1, 
						'post_status' => 'publish', 
						'order' => 'asc'
					);
					$query = new WP_Query($query_args);
					if ($query->have_posts()) {
						echo '<div class="col s12 m10 push-m1"><ul class="collapsible mg0">';
						echo '<details><summary>' . $title . '</summary><div><ul class="collapsible">';
						while ($query->have_posts()) {
							$query->the_post();
							echo '<details><summary>' . get_the_title() . '</summary><div><a target="_blank" href="' . get_field('arquivo') . '" title="' . get_the_title() . '">Clique aqui para acessar</a></div></details>';
						}
						echo '</ul></div></details>';
						echo '</ul></div>';
					} else {
						echo '<div class="col s12 m10 push-m1"><ul class="collapsible mg0">';
						echo '<details><summary>' . $title . '</summary><div><p>Não há conteúdos.</p></div></details>';
						echo '</ul></div>';
					}
					wp_reset_query();
				}

				foreach ($categories as $slug => $title) {
					render_category($slug, $title);
				}
				?>
			</div>
		</div>


	</div>

<?php get_footer(); ?>
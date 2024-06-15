<?php /* Template Name: Tintas Industriais */

get_header(); ?>

	<div class="default-template">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php $tintasindustriais = array('post_type' => 'page', 'p' => 4604, 'posts_per_page' => 1, 'post_status' => 'publish', 'order' => 'asc');
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
				<?php 
				$categories = array(
					'especificacoes-tintas-industriais' => 'Especificações de Pintura',
					'acabamentos-tintas-industriais' => 'Acabamentos',
					'alta-temperatura-tintas-industriais' => 'Alta Temperatura',
					'holding-primer-tintas-industriais' => 'Intermediário/Holding Primer',
					'normas-petrobras' => 'Normas Petrobrás',
					'primers-tintas-industriais' => 'Primers',
					'primer-acabamento-tintas-industriais' => 'Primer/Acabamento',
					'aderencia-tintas-industriais' => 'Promotor de Aderência',
					'primer-rico-zinco' => 'Primer Rico em Zinco',
					'shop-primer' => 'Shop Primer'
				);

				function render_category($term, $title) {
					$query_args = array(
						'post_type' => 'tintas_industriais',
						'tax_query' => array(
							array(
								'taxonomy' => 'categorias_industriais',
								'field'    => 'slug',
								'terms'    => $term,
							),
						), 
						'posts_per_page' => -1, 
						'post_status' => 'publish', 
						'order' => 'asc', 
						'orderby' => 'name'
					);
					$query = new WP_Query($query_args);
					if ($query->have_posts()) {
						echo '<details><summary>' . $title . '</summary><div><ul class="collapsible">';
						while ($query->have_posts()) {
							$query->the_post();
							echo '<details><summary>' . get_the_title() . '</summary><div><a target="_blank" href="' . get_field('arquivo', get_the_ID()) . '" title="' . get_the_title() . '">Clique aqui para acessar</a></div></details>';
						}
						echo '</ul></div></details>';
					} else {
						echo '<details><summary>' . $title . '</summary><div><p>Não há conteúdos.</p></div></details>';
					}
					wp_reset_query();
				}

				foreach ($categories as $slug => $title) {
					echo '<div class="accordion-item"><ul class="collapsible">';
					render_category($slug, $title);
					echo '</ul></div>';
				}
				?>
			</div>
		</div>

	</div>

<?php get_footer(); ?>
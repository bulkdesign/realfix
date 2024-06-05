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

				<!-- Especialidades -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<details>
							<summary>
								Especificações de Pintura
							</summary>
							<div>
								<ul class="collapsible">
									<!-- Loop categorias -->
									<?php $industriais = array('post_type' => 'tintas_industriais',
										'tax_query' => array(
											array(
												'taxonomy' => 'categorias_industriais',
												'field'    => 'slug',
												'terms'    => 'especificacoes-tintas-industriais',
											),
										), 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc', 'orderby' => 'name');
									$industriais = new WP_Query( $industriais );
									if ( $industriais->have_posts() ) {
										while ( $industriais->have_posts() ) : $industriais->the_post(); ?>

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
						</details>
					</ul>
				</div>
				<!-- Acabamentos -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<details>
							<summary>
								Acabamentos
							</summary>
							<div>
								<ul class="collapsible">
									<!-- Loop categorias -->
									<?php $industriais = array('post_type' => 'tintas_industriais',
										'tax_query' => array(
											array(
												'taxonomy' => 'categorias_industriais',
												'field'    => 'slug',
												'terms'    => 'acabamentos-tintas-industriais',
											),
										), 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc', 'orderby' => 'name');
									$industriais = new WP_Query( $industriais );
									if ( $industriais->have_posts() ) {
										while ( $industriais->have_posts() ) : $industriais->the_post(); ?>

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
						</details>
					</ul>
				</div>
				<!-- Alta temperatura -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<details>
							<summary>
								Alta Temperatura
							</summary>
							<div>
								<ul class="collapsible">
									<!-- Loop categorias -->
									<?php $industriais = array('post_type' => 'tintas_industriais',
										'tax_query' => array(
											array(
												'taxonomy' => 'categorias_industriais',
												'field'    => 'slug',
												'terms'    => 'alta-temperatura-tintas-industriais',
											),
										), 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc', 'orderby' => 'name');
									$industriais = new WP_Query( $industriais );
									if ( $industriais->have_posts() ) {
										while ( $industriais->have_posts() ) : $industriais->the_post(); ?>

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
						</details>
					</ul>
				</div>
				<!-- Intermediário/Holding Primer -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<details>
							<summary>
								Intermediário/Holding Primer
							</summary>
							<div>
								<ul class="collapsible">
									<!-- Loop categorias -->
									<?php $industriais = array('post_type' => 'tintas_industriais',
										'tax_query' => array(
											array(
												'taxonomy' => 'categorias_industriais',
												'field'    => 'slug',
												'terms'    => 'holding-primer-tintas-industriais',
											),
										), 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc', 'orderby' => 'name');
									$industriais = new WP_Query( $industriais );
									if ( $industriais->have_posts() ) {
										while ( $industriais->have_posts() ) : $industriais->the_post(); ?>

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
						</details>
					</ul>
				</div>
				<!-- Normas Petrobrás -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<details>
							<summary>
								Normas Petrobrás
							</summary>
							<div>
								<ul class="collapsible">
									<!-- Loop categorias -->
									<?php $industriais = array('post_type' => 'tintas_industriais',
										'tax_query' => array(
											array(
												'taxonomy' => 'categorias_industriais',
												'field'    => 'slug',
												'terms'    => 'normas-petrobras',
											),
										), 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc', 'orderby' => 'name');
									$industriais = new WP_Query( $industriais );
									if ( $industriais->have_posts() ) {
										while ( $industriais->have_posts() ) : $industriais->the_post(); ?>

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
						</details>
					</ul>
				</div>
				<!-- Primers -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<details>
							<summary>
								Primers
							</summary>
							<div>
								<ul class="collapsible">
									<!-- Loop categorias -->
									<?php $industriais = array('post_type' => 'tintas_industriais',
										'tax_query' => array(
											array(
												'taxonomy' => 'categorias_industriais',
												'field'    => 'slug',
												'terms'    => 'primers-tintas-industriais',
											),
										), 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc', 'orderby' => 'name');
									$industriais = new WP_Query( $industriais );
									if ( $industriais->have_posts() ) {
										while ( $industriais->have_posts() ) : $industriais->the_post(); ?>

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
						</details>
					</ul>
				</div>
				<!-- Primer/Acabamento -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<details>
							<summary>
								Primer/Acabamento
							</summary>
							<div>
								<ul class="collapsible">
									<!-- Loop categorias -->
									<?php $industriais = array('post_type' => 'tintas_industriais',
										'tax_query' => array(
											array(
												'taxonomy' => 'categorias_industriais',
												'field'    => 'slug',
												'terms'    => 'primer-acabamento-tintas-industriais',
											),
										), 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc', 'orderby' => 'name');
									$industriais = new WP_Query( $industriais );
									if ( $industriais->have_posts() ) {
										while ( $industriais->have_posts() ) : $industriais->the_post(); ?>

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
						</details>
					</ul>
				</div>
				<!-- Promotor de aderência -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<details>
							<summary>
								Promotor de Aderência
							</summary>
							<div>
								<ul class="collapsible">
									<!-- Loop categorias -->
									<?php $industriais = array('post_type' => 'tintas_industriais',
										'tax_query' => array(
											array(
												'taxonomy' => 'categorias_industriais',
												'field'    => 'slug',
												'terms'    => 'aderencia-tintas-industriais',
											),
										), 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc', 'orderby' => 'name');
									$industriais = new WP_Query( $industriais );
									if ( $industriais->have_posts() ) {
										while ( $industriais->have_posts() ) : $industriais->the_post(); ?>

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
						</details>
					</ul>
				</div>
				<!-- Primer Rico em Zinco -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<details>
							<summary>
								Primer Rico em Zinco
							</summary>
							<div>
								<ul class="collapsible">
									<!-- Loop categorias -->
									<?php $industriais = array('post_type' => 'tintas_industriais',
										'tax_query' => array(
											array(
												'taxonomy' => 'categorias_industriais',
												'field'    => 'slug',
												'terms'    => 'primer-rico-zinco',
											),
										), 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc', 'orderby' => 'name');
									$industriais = new WP_Query( $industriais );
									if ( $industriais->have_posts() ) {
										while ( $industriais->have_posts() ) : $industriais->the_post(); ?>

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
						</details>
					</ul>
				</div>
				<!-- Shop Primer -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<details>
							<summary>
								Shop Primer
							</summary>
							<div>
								<ul class="collapsible">
									<!-- Loop categorias -->
									<?php $industriais = array('post_type' => 'tintas_industriais',
										'tax_query' => array(
											array(
												'taxonomy' => 'categorias_industriais',
												'field'    => 'slug',
												'terms'    => 'shop-primer',
											),
										), 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc', 'orderby' => 'name');
									$industriais = new WP_Query( $industriais );
									if ( $industriais->have_posts() ) {
										while ( $industriais->have_posts() ) : $industriais->the_post(); ?>

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
						</details>
					</ul>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
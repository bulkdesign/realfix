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
									<?php $madeira = array('post_type' => 'tintas_madeira',
										'tax_query' => array(
											array(
												'taxonomy' => 'categorias_madeira',
												'field'    => 'slug',
												'terms'    => 'acabamentos-madeira',
											),
										), 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc');
									$madeira = new WP_Query( $madeira );
									if ( $madeira->have_posts() ) {
										while ( $madeira->have_posts() ) : $madeira->the_post(); ?>

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

				<!-- Fillers -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<details>
							<summary>
								Fillers
							</summary>
							<div>
								<ul class="collapsible">
									<!-- Loop categorias -->
									<?php $madeira = array('post_type' => 'tintas_madeira',
										'tax_query' => array(
											array(
												'taxonomy' => 'categorias_madeira',
												'field'    => 'slug',
												'terms'    => 'fillers-madeira',
											),
										), 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc');
									$madeira = new WP_Query( $madeira );
									if ( $madeira->have_posts() ) {
										while ( $madeira->have_posts() ) : $madeira->the_post(); ?>

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

				<!-- Impermeabilizantes -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<details>
							<summary>
								Impermeabilizantes
							</summary>
							<div>
								<ul class="collapsible">
									<!-- Loop categorias -->
									<?php $madeira = array('post_type' => 'tintas_madeira',
										'tax_query' => array(
											array(
												'taxonomy' => 'categorias_madeira',
												'field'    => 'slug',
												'terms'    => 'impermeabilizantes-madeira',
											),
										), 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc');
									$madeira = new WP_Query( $madeira );
									if ( $madeira->have_posts() ) {
										while ( $madeira->have_posts() ) : $madeira->the_post(); ?>

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

				<!-- Massas -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<details>
							<summary>
								Massas
							</summary>
							<div>
								<ul class="collapsible">
									<!-- Loop categorias -->
									<?php $madeira = array('post_type' => 'tintas_madeira',
										'tax_query' => array(
											array(
												'taxonomy' => 'categorias_madeira',
												'field'    => 'slug',
												'terms'    => 'massas-madeira',
											),
										), 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc');
									$madeira = new WP_Query( $madeira );
									if ( $madeira->have_posts() ) {
										while ( $madeira->have_posts() ) : $madeira->the_post(); ?>

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
									<?php $madeira = array('post_type' => 'tintas_madeira',
										'tax_query' => array(
											array(
												'taxonomy' => 'categorias_madeira',
												'field'    => 'slug',
												'terms'    => 'primers-madeira',
											),
										), 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc');
									$madeira = new WP_Query( $madeira );
									if ( $madeira->have_posts() ) {
										while ( $madeira->have_posts() ) : $madeira->the_post(); ?>

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

				<!-- Seladores -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<details>
							<summary>
								Seladores
							</summary>
							<div>
								<ul class="collapsible">
									<!-- Loop categorias -->
									<?php $madeira = array('post_type' => 'tintas_madeira',
										'tax_query' => array(
											array(
												'taxonomy' => 'categorias_madeira',
												'field'    => 'slug',
												'terms'    => 'seladores-madeira',
											),
										), 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc');
									$madeira = new WP_Query( $madeira );
									if ( $madeira->have_posts() ) {
										while ( $madeira->have_posts() ) : $madeira->the_post(); ?>

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

				<!-- Tingidores -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<details>
							<summary>
								Tingidores
							</summary>
							<div>
								<ul class="collapsible">
									<!-- Loop categorias -->
									<?php $madeira = array('post_type' => 'tintas_madeira',
										'tax_query' => array(
											array(
												'taxonomy' => 'categorias_madeira',
												'field'    => 'slug',
												'terms'    => 'tingidores-madeira',
											),
										), 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc');
									$madeira = new WP_Query( $madeira );
									if ( $madeira->have_posts() ) {
										while ( $madeira->have_posts() ) : $madeira->the_post(); ?>

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

				<!-- Vernizes -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<details>
							<summary>
								Vernizes
							</summary>
							<div>
								<ul class="collapsible">
									<!-- Loop categorias -->
									<?php $madeira = array('post_type' => 'tintas_madeira',
										'tax_query' => array(
											array(
												'taxonomy' => 'categorias_madeira',
												'field'    => 'slug',
												'terms'    => 'vernizes-madeira',
											),
										), 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc');
									$madeira = new WP_Query( $madeira );
									if ( $madeira->have_posts() ) {
										while ( $madeira->have_posts() ) : $madeira->the_post(); ?>

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
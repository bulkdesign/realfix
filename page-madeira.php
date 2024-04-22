<?php /* Template Name: Tintas Madeira */

get_header(); ?>

	<div class="default-template">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php $tintasmadeira = array('post_type' => 'page', 'p' => 4615, 'posts_per_page' => 1, 'post_status' => 'publish', 'order' => 'asc');
				$tintasmadeira = new WP_Query( $tintasmadeira );
					if ( $tintasmadeira->have_posts() ) {
						while ( $tintasmadeira->have_posts() ) : $tintasmadeira->the_post(); ?>

							<div class="blocks-container">
								<div class="row">
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
			<div class="row pb50 pb40m">

				<!-- Acabamentos -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<li>
							<div class="collapsible-header"><i class="fas fa-chevron-down fa-2x"></i>Acabamentos</div>
							<div class="collapsible-body">
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

											<li>
												<div class="collapsible-header"><i class="fas fa-chevron-down fa-2x"></i><?php the_title(); ?></div>
												<div class="collapsible-body">
													<span>
														<p class="mt0"><strong>Descrição:</strong> <?php the_field('descricao'); ?></p>
														<a target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Clique aqui para acessar <i class="fas fa-arrow-right"></i></a>
													</span>
												</div>
											</li>

										<?php endwhile; }
										else {
											echo "Não há conteúdos.";
										}
										wp_reset_query();
										?>
								</ul>				
							</div>
						</li>
					</ul>
				</div>

				<!-- Fillers -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<li>
							<div class="collapsible-header"><i class="fas fa-chevron-down fa-2x"></i>Fillers</div>
							<div class="collapsible-body">
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

											<li>
												<div class="collapsible-header"><i class="fas fa-chevron-down fa-2x"></i><?php the_title(); ?></div>
												<div class="collapsible-body">
													<span>
														<p class="mt0"><strong>Descrição:</strong> <?php the_field('descricao'); ?></p>
														<a target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Clique aqui para acessar <i class="fas fa-arrow-right"></i></a>
													</span>
												</div>
											</li>

										<?php endwhile; }
										else {
											echo "Não há conteúdos.";
										}
										wp_reset_query();
										?>
								</ul>				
							</div>
						</li>
					</ul>
				</div>

				<!-- Impermeabilizantes -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<li>
							<div class="collapsible-header"><i class="fas fa-chevron-down fa-2x"></i>Impermeabilizantes</div>
							<div class="collapsible-body">
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

											<li>
												<div class="collapsible-header"><i class="fas fa-chevron-down fa-2x"></i><?php the_title(); ?></div>
												<div class="collapsible-body">
													<span>
														<p class="mt0"><strong>Descrição:</strong> <?php the_field('descricao'); ?></p>
														<a target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Clique aqui para acessar <i class="fas fa-arrow-right"></i></a>
													</span>
												</div>
											</li>

										<?php endwhile; }
										else {
											echo "Não há conteúdos.";
										}
										wp_reset_query();
										?>
								</ul>				
							</div>
						</li>
					</ul>
				</div>

				<!-- Massas -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<li>
							<div class="collapsible-header"><i class="fas fa-chevron-down fa-2x"></i>Massas</div>
							<div class="collapsible-body">
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

											<li>
												<div class="collapsible-header"><i class="fas fa-chevron-down fa-2x"></i><?php the_title(); ?></div>
												<div class="collapsible-body">
													<span>
														<p class="mt0"><strong>Descrição:</strong> <?php the_field('descricao'); ?></p>
														<a target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Clique aqui para acessar <i class="fas fa-arrow-right"></i></a>
													</span>
												</div>
											</li>

										<?php endwhile; }
										else {
											echo "Não há conteúdos.";
										}
										wp_reset_query();
										?>
								</ul>				
							</div>
						</li>
					</ul>
				</div>

				<!-- Primers -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<li>
							<div class="collapsible-header"><i class="fas fa-chevron-down fa-2x"></i>Primers</div>
							<div class="collapsible-body">
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

											<li>
												<div class="collapsible-header"><i class="fas fa-chevron-down fa-2x"></i><?php the_title(); ?></div>
												<div class="collapsible-body">
													<span>
														<p class="mt0"><strong>Descrição:</strong> <?php the_field('descricao'); ?></p>
														<a target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Clique aqui para acessar <i class="fas fa-arrow-right"></i></a>
													</span>
												</div>
											</li>

										<?php endwhile; }
										else {
											echo "Não há conteúdos.";
										}
										wp_reset_query();
										?>
								</ul>				
							</div>
						</li>
					</ul>
				</div>

				<!-- Seladores -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<li>
							<div class="collapsible-header"><i class="fas fa-chevron-down fa-2x"></i>Seladores</div>
							<div class="collapsible-body">
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

											<li>
												<div class="collapsible-header"><i class="fas fa-chevron-down fa-2x"></i><?php the_title(); ?></div>
												<div class="collapsible-body">
													<span>
														<p class="mt0"><strong>Descrição:</strong> <?php the_field('descricao'); ?></p>
														<a target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Clique aqui para acessar <i class="fas fa-arrow-right"></i></a>
													</span>
												</div>
											</li>

										<?php endwhile; }
										else {
											echo "Não há conteúdos.";
										}
										wp_reset_query();
										?>
								</ul>				
							</div>
						</li>
					</ul>
				</div>

				<!-- Tingidores -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<li>
							<div class="collapsible-header"><i class="fas fa-chevron-down fa-2x"></i>Tingidores</div>
							<div class="collapsible-body">
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

											<li>
												<div class="collapsible-header"><i class="fas fa-chevron-down fa-2x"></i><?php the_title(); ?></div>
												<div class="collapsible-body">
													<span>
														<p class="mt0"><strong>Descrição:</strong> <?php the_field('descricao'); ?></p>
														<a target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Clique aqui para acessar <i class="fas fa-arrow-right"></i></a>
													</span>
												</div>
											</li>

										<?php endwhile; }
										else {
											echo "Não há conteúdos.";
										}
										wp_reset_query();
										?>
								</ul>				
							</div>
						</li>
					</ul>
				</div>

				<!-- Vernizes -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<li>
							<div class="collapsible-header"><i class="fas fa-chevron-down fa-2x"></i>Vernizes</div>
							<div class="collapsible-body">
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

											<li>
												<div class="collapsible-header"><i class="fas fa-chevron-down fa-2x"></i><?php the_title(); ?></div>
												<div class="collapsible-body">
													<span>
														<p class="mt0"><strong>Descrição:</strong> <?php the_field('descricao'); ?></p>
														<a target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Clique aqui para acessar <i class="fas fa-arrow-right"></i></a>
													</span>
												</div>
											</li>

										<?php endwhile; }
										else {
											echo "Não há conteúdos.";
										}
										wp_reset_query();
										?>
								</ul>				
							</div>
						</li>
					</ul>
				</div>
				

			</div>
		</div>
	</div>

<?php get_footer(); ?>
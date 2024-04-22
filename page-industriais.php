<?php /* Template Name: Tintas Industriais */

get_header(); ?>

	<div class="default-template">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php $tintasindustriais = array('post_type' => 'page', 'p' => 4604, 'posts_per_page' => 1, 'post_status' => 'publish', 'order' => 'asc');
				$tintasindustriais = new WP_Query( $tintasindustriais );
					if ( $tintasindustriais->have_posts() ) {
						while ( $tintasindustriais->have_posts() ) : $tintasindustriais->the_post(); ?>

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

				<!-- Especialidades -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<li>
							<div class="collapsible-header"><i class="fas fa-chevron-down fa-2x"></i>Especificações de Pintura</div>
							<div class="collapsible-body">
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
				<!-- Acabamentos -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<li>
							<div class="collapsible-header"><i class="fas fa-chevron-down fa-2x"></i>Acabamentos</div>
							<div class="collapsible-body">
								<ul class="collapsible">
									<!-- Loop categorias -->
									<?php $industriais = array('post_type' => 'tintas_industriais',
										'tax_query' => array(
											array(
												'taxonomy' => 'categorias_industriais',
												'field'    => 'slug',
												'terms'    => 'acabamentos-tintas-industriais',
											),
										), 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc');
									$industriais = new WP_Query( $industriais );
									if ( $industriais->have_posts() ) {
										while ( $industriais->have_posts() ) : $industriais->the_post(); ?>

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
				<!-- Alta temperatura -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<li>
							<div class="collapsible-header"><i class="fas fa-chevron-down fa-2x"></i>Alta Temperatura</div>
							<div class="collapsible-body">
								<ul class="collapsible">
									<!-- Loop categorias -->
									<?php $industriais = array('post_type' => 'tintas_industriais',
										'tax_query' => array(
											array(
												'taxonomy' => 'categorias_industriais',
												'field'    => 'slug',
												'terms'    => 'alta-temperatura-tintas-industriais',
											),
										), 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc');
									$industriais = new WP_Query( $industriais );
									if ( $industriais->have_posts() ) {
										while ( $industriais->have_posts() ) : $industriais->the_post(); ?>

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
				<!-- Intermediário/Holding Primer -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<li>
							<div class="collapsible-header"><i class="fas fa-chevron-down fa-2x"></i>Intermediário/Holding Primer</div>
							<div class="collapsible-body">
								<ul class="collapsible">
									<!-- Loop categorias -->
									<?php $industriais = array('post_type' => 'tintas_industriais',
										'tax_query' => array(
											array(
												'taxonomy' => 'categorias_industriais',
												'field'    => 'slug',
												'terms'    => 'holding-primer-tintas-industriais',
											),
										), 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc');
									$industriais = new WP_Query( $industriais );
									if ( $industriais->have_posts() ) {
										while ( $industriais->have_posts() ) : $industriais->the_post(); ?>

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
				<!-- Normas Petrobrás -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<li>
							<div class="collapsible-header"><i class="fas fa-chevron-down fa-2x"></i>Normas Petrobrás</div>
							<div class="collapsible-body">
								<ul class="collapsible">
									<!-- Loop categorias -->
									<?php $industriais = array('post_type' => 'tintas_industriais',
										'tax_query' => array(
											array(
												'taxonomy' => 'categorias_industriais',
												'field'    => 'slug',
												'terms'    => 'normas-petrobras',
											),
										), 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc');
									$industriais = new WP_Query( $industriais );
									if ( $industriais->have_posts() ) {
										while ( $industriais->have_posts() ) : $industriais->the_post(); ?>

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
									<?php $industriais = array('post_type' => 'tintas_industriais',
										'tax_query' => array(
											array(
												'taxonomy' => 'categorias_industriais',
												'field'    => 'slug',
												'terms'    => 'primers-tintas-industriais',
											),
										), 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc');
									$industriais = new WP_Query( $industriais );
									if ( $industriais->have_posts() ) {
										while ( $industriais->have_posts() ) : $industriais->the_post(); ?>

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
				<!-- Primer/Acabamento -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<li>
							<div class="collapsible-header"><i class="fas fa-chevron-down fa-2x"></i>Primer/Acabamento</div>
							<div class="collapsible-body">
								<ul class="collapsible">
									<!-- Loop categorias -->
									<?php $industriais = array('post_type' => 'tintas_industriais',
										'tax_query' => array(
											array(
												'taxonomy' => 'categorias_industriais',
												'field'    => 'slug',
												'terms'    => 'primer-acabamento-tintas-industriais',
											),
										), 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc');
									$industriais = new WP_Query( $industriais );
									if ( $industriais->have_posts() ) {
										while ( $industriais->have_posts() ) : $industriais->the_post(); ?>

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
				<!-- Promotor de aderência -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<li>
							<div class="collapsible-header"><i class="fas fa-chevron-down fa-2x"></i>Promotor de Aderência</div>
							<div class="collapsible-body">
								<ul class="collapsible">
									<!-- Loop categorias -->
									<?php $industriais = array('post_type' => 'tintas_industriais',
										'tax_query' => array(
											array(
												'taxonomy' => 'categorias_industriais',
												'field'    => 'slug',
												'terms'    => 'aderencia-tintas-industriais',
											),
										), 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc');
									$industriais = new WP_Query( $industriais );
									if ( $industriais->have_posts() ) {
										while ( $industriais->have_posts() ) : $industriais->the_post(); ?>

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
				<!-- Primer Rico em Zinco -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<li>
							<div class="collapsible-header"><i class="fas fa-chevron-down fa-2x"></i>Primer Rico em Zinco</div>
							<div class="collapsible-body">
								<ul class="collapsible">
									<!-- Loop categorias -->
									<?php $industriais = array('post_type' => 'tintas_industriais',
										'tax_query' => array(
											array(
												'taxonomy' => 'categorias_industriais',
												'field'    => 'slug',
												'terms'    => 'primer-rico-zinco',
											),
										), 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc');
									$industriais = new WP_Query( $industriais );
									if ( $industriais->have_posts() ) {
										while ( $industriais->have_posts() ) : $industriais->the_post(); ?>

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
				<!-- Shop Primer -->
				<div class="col s12 m10 push-m1">	
					<ul class="collapsible mg0">
						<li>
							<div class="collapsible-header"><i class="fas fa-chevron-down fa-2x"></i>Shop Primer</div>
							<div class="collapsible-body">
								<ul class="collapsible">
									<!-- Loop categorias -->
									<?php $industriais = array('post_type' => 'tintas_industriais',
										'tax_query' => array(
											array(
												'taxonomy' => 'categorias_industriais',
												'field'    => 'slug',
												'terms'    => 'shop-primer',
											),
										), 'posts_per_page' => -1, 'post_status' => 'publish', 'order' => 'asc');
									$industriais = new WP_Query( $industriais );
									if ( $industriais->have_posts() ) {
										while ( $industriais->have_posts() ) : $industriais->the_post(); ?>

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
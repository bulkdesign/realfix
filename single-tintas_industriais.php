<?php get_header(); ?>

	<div class="default-template">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="blocks-container">
				<div class="alignwide">
					<div class="col s12 center pt50 pt50m">
						<h3 class="vermelho-bon-text f30"><?php the_title(); ?></h3>
					</div>
					<div class="col s12 m8 push-m2 pb30 pb30m">
						<p class="center"><?php the_field('descricao'); ?></p>
					</div>

					<div class="col s12 m8 push-m2 center">
						<p>Problemas para visualizar? <a href="<?php the_field('arquivo'); ?>" target="_blank">Clique aqui</a></p>
					</div>

					<div class="col s12 m8 push-m2 pb30 pb30m">
						<?php echo do_shortcode( '[pdf-embedder url="' . get_field('arquivo') . '"]'); ?>
					</div>

				</div>
			</div>
			
		<?php endwhile; ?>

	</div>

<?php get_footer(); ?>
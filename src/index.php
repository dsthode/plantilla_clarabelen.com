<?php get_header(); ?>

<div class="row">

	<?php

	// WP_Query arguments
	$args = array (
		'tag_name'               => 'destacado',
		'posts_per_page'         => '9',
	);

	// The Query
	$destacados = new WP_Query( $args );

	?>

	<div class="col-sm-9">

		<?php if($destacados->have_posts()) : ?>
			<div class="col-sm-12">
				<h3 class="section-label">Tutoriales destacados</h3>
				<?php $destacado_count = 1 ?>
				<?php while($destacados->have_posts()) : $destacados->the_post(); ?>
		<div class="col-sm-4 post-destacado <?php if ($destacado_count % 3 == 0) : ?>post-destacado-last<?php endif; ?>">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
						<div class="small post-destacado-meta"><?php the_date(); ?> | <?php comments_number('Sin comentarios', 'Un comentario', '% comentarios'); ?> | por <?php the_author(); ?></div>
						<h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<p><?php // the_excerpt(); ?></p>
					</div>
					<?php if ($destacado_count % 3 == 0) : ?>
						<div class="clearfix"></div>
					<?php endif; ?>
					<?php $destacado_count += 1; ?>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

		<?php wp_reset_postdata(); ?>

		<div class="col-sm-12 post-list">
			<?php if(have_posts()) : ?>
				<h3 class="section-label">Entradas recientes</h3>
				<?php include('post_list.php'); ?>
				<div class="navigation">
					<?php posts_nav_link(); ?>
				</div>
			<?php endif; ?>
		</div>

	</div>

	<?php get_sidebar(); ?>   
</div>

<?php get_footer(); ?>

<?php while(have_posts()) : the_post(); ?>
	<div class="post media">
		<div class="post-featured-image">
			<a class="pull-left" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('class' => 'media-object')); ?></a>
		</div>
		<div class="media-body">
			<p><?php the_date(); ?> | <?php comments_number('Sin comentarios', 'Un comentario', '% comentarios'); ?> | por <?php the_author(); ?></p>
			<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<div class="entry">   
				<?php the_excerpt(); ?>
				<a class="btn btn-default" href="<?php the_permalink(); ?>">Seguir leyendo ...</a>
			</div>
		</div>
	</div>
<?php endwhile; ?>

<?php get_header(); ?>

<div class="row">
	<div class="col-sm-9 post-list">
		<?php if(have_posts()) : ?>
			<h2>Últimas entradas</h2>
			<?php include('post_list.php'); ?>
			<div class="navigation">
				<?php posts_nav_link(); ?>
			</div>
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>   
</div>

<?php get_footer(); ?>

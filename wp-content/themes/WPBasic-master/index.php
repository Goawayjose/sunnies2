<?php get_header(); ?>

<?php if(have_posts()): while (have_posts()) : the_post(); ?>

	<a href="<?php the_permalink() ?>">
		<?php the_title(); ?>
	</a>

	<div class="" style="height:1800px; width:100%;">

	</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>

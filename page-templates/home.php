<?php 
/**
 * Template Name: Home page 
*/
get_header(); ?>

<!-- banner -->
<div class="container-fluid banner-wrapper">
	<div class="container banner">
		<h1><?php the_field('banner_text'); ?></h1>
		<h5></h5>
		<div class="banner-btn-wrapper">
			
		</div>
	</div>
</div>

<?php while (have_posts()) : the_post(); ?>
	<?php the_content('[...]'); ?> 
<?php endwhile; ?>

<?php get_footer(); ?>
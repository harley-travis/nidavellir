<?php 
/**
 * Template Name: Privacy and Terms of Service
*/
get_header(); ?>


<section class="container-fluid blue-purple-magenta white-text">
	<div class="container">
		<div class="row">
			<div class="page-title-wrapper text-center">
				<h2 class="cta-heading"><?php the_field('title'); ?></h2>
				<a href="#" data-toggle="modal" data-target="#contactForm" class="btn btn-inverse-white btn-sm-wide"><?php the_field('call_to_action_btn_text'); ?></a>
			</div>
		</div>
	</div>
</section>

<section class="container">
	<div class="row">
		<?php while (have_posts()) : the_post(); ?>
			<?php the_content('[...]'); ?> 
		<?php endwhile; ?>
	</div>
</section>

<?php get_footer(); ?>
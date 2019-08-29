<?php 
/**
 * Template Name: Home page 
*/
?>

<div class="container-fluiid">
	<div class="container">
	<?php get_header(); ?>
	</div>
</div>

<!-- banner -->
<div class="container-fluid banner-wrapper" style="background-image: url(<?php the_field('banner_image'); ?>)">

	<div class="container banner-container">
		<h1>Show Me The Recipes!</h1>
		<div class="banner-cta">
			<a href="#" class="btn btn-large btn-cta">See Posts</a>
		</div>
	</div>

</div>

<section class="container-fluid">
	<div class="container">
		<div class="message-tag">
			<h1><?php the_field('welcome_message'); ?></h1>
			<h4><?php the_field('welcome_tag_line'); ?></h4>
		</div>
		<div class="featured-posts">
			<div class="row">
	

				<!-- display the lateste articles here -->
				<?php 

				$args = array (
					'name' => '',
					'post_status' => 'publish',
					'posts_per_page' => 2,

				);

				$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

				<div class="col-sm-6">
					<div class="card">
						<img src="<?php the_post_thumbnail_url(); ?>" class="" alt="">
						<div class="card-body">
							<h5 class="card-title"><?php the_title(); ?></h5>
							<p class="card-text"><?php the_excerpt();  ?></p>
							<a href="<?php the_permalink();  ?>" class="btn btn-outline-dark">Read More</a>
						</div>
					</div>
				</div>


				<?php endforeach;

					wp_reset_postdata();

				?>
			</div>
			
		</div>
	</div>
</section>

<section class="container-fluid banner-wrapper" style="background-image: url(<?php the_field('second_banner'); ?>)">
	<div class="container second-banner-wrapper">
		<div class="second-message">
			<h3><?php the_field('second_banner_title'); ?></h3>
			<span><?php the_field('second_banner_message'); ?></span>
		</div>
	</div>
</section>

<section class="container-fluid">
	<div class="container message-tag">
		<h2>Instagram</h2>
		<div class="instagram-posts">
			
			<!-- use plugin to display posts here -->
			<?php echo do_shortcode( '[instagram-feed]' ); ?>
			
			
		</div>
	</div>
</section>

<section class="container-fluid">
	<div class="container">
		<div class="message-tag">
			<h1><?php the_field('final_tag_title'); ?></h1>
			<h2><?php the_field('final_tag_message'); ?></h2>
		</div>
		<div class="featured-posts">
		
			<!-- display the following 2 articles here -->
		
		</div>
	</div>
</section>

<?php while (have_posts()) : the_post(); ?>
	<?php the_content('[...]'); ?> 
<?php endwhile; ?>

<div class="container-fluiid">
	<div class="container">
	<?php get_footer(); ?>
	</div>
</div>


<?php 
/**
 *
 * The main template file
 *
 * @link https://healthyishharley.com
 * @package WordPress
 * @subpackage Nidavellir
 * @since Nidavellir 1.0
 *
 */
get_header(); ?>

<!-- this file is the blog template -->
<article class="container">
	<?php if ($wp_query->have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="pad">
				<div class="row">
					<div class="blog-title">
						<h2 class=""><?php the_title(); ?></h2>
					</div>
				</div>

				<div class="row">
					<div class="blog-info">
						<span class="purple-text post-author"><i>Written by:</i> <?php the_author(); ?></span><br>
						<span class="post-date"><i>Published:</i> <?php the_date('F j, Y'); ?></span>
					</div>
				</div>

				<div class="row">
					<div class="blog-content">
						<?php the_content('[...]'); ?> 
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</article>

<?php get_footer(); ?>
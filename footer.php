<footer class="">
	<div class="">
		<div class="social-wrapper">
			<ul>
				<li class=""><a href="#"><i class="fab fa-facebook social-icon"></i></a></li>
				<li class=""><a href="#"><i class="fab fa-instagram social-icon"></i></a></li>
				<li class=""><a href="#"><i class="fab fa-pinterest-square social-icon"></i></a></li>
			</ul>
		</div>
		<div class="footer-nav">
			<ul class="nav">
				  <li class="nav-item">
					<a class="nav-link" href="#">Contact</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">FAQ</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">Subscribe</a>
				  </li>
			</ul>
		</div>
		<div class="last-tag">
			<span><?php the_field('last_tag'); ?></span>
		</div>
		<div class="contact-wrapper">
		
			<!-- add contact form -->
			<?php echo do_shortcode( '[contact-form-7 id="9"]' ); ?>
			
			
		</div>
		<div class="copyright">
			<span>&copy; <?php echo date('Y'); ?> HealthyishHarley.com | All Rights Reserved</span>
		</div>
	</div>
</footer>

		

		<?php dynamic_sidebar( 'footer-information' ); ?>

        <!-- javascripts -->
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/particles.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/bigslide.js"></script>

		<?php wp_footer(); ?>
    </body>
</html>
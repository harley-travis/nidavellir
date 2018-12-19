<header class="container-fluid">
	<div class="container header-wrapper">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12 logo-wrapper center text-center">
				<span class="logo-font"><a href="<?php echo ROOT_URL; ?>" class="logo-link"><?php dynamic_sidebar( 'logo-title' ); ?></a></span>
			</div>
		</div> 
		<div class="row">
			
			<div class="col-6 header-second">
				<div class="cta-header-btn text-center display-none-sm">
					
				</div>
			</div>
			<div class="col-6 header-second">
				<div class="float-right">
					<div class="bars-wrapper display-none">
						<a href="#menu" class="menu-link"><i class="fas fa-bars bars-icon"></i></a>
					</div>
					<nav id="menu" class="panel" role="navigation">
						<?php dynamic_sidebar( 'mobile-nav' ); ?>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>

<?php dynamic_sidebar( 'header-information' ); ?>
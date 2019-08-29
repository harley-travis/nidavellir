<header class="">
	<div class="header-wrapper">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12 logo-wrapper">
				<span class="logo-font"><a href="<?php echo ROOT_URL; ?>" class="logo-link"><?php dynamic_sidebar( 'logo-title' ); ?></a></span>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 nav-wrap">
				<nav>
					<ul class="nav">
					  <li class="nav-item">
						<a class="nav-link" href="#">Home</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#">Food</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#">Whatever</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
					  </li>
					</ul>
				</nav>
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
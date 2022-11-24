<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package soleos
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('body-wrapper font-cambria'); ?>>
	<?php wp_body_open(); ?>
	<!-- Start Soleos loader -->
	<div id="preloader" class="preloader">
		<div class="animation-preloader">
			<div class="spinner">
			</div>
			<div class="txt-loading">
				<span data-text-preloader="B" class="letters-loading">
					S
				</span>
				<span data-text-preloader="U" class="letters-loading">
					O
				</span>
				<span data-text-preloader="S" class="letters-loading">
					L
				</span>
				<span data-text-preloader="I" class="letters-loading">
					E
				</span>
				<span data-text-preloader="C" class="letters-loading">
					O
				</span>
				<span data-text-preloader="O" class="letters-loading">
					S
				</span>
			</div>
			<p class="text-center">Loading</p>
		</div>
		<div class="loader">
			<div class="row">
				<div class="col-3 loader-section section-left">
					<div class="bg"></div>
				</div>
				<div class="col-3 loader-section section-left">
					<div class="bg"></div>
				</div>
				<div class="col-3 loader-section section-right">
					<div class="bg"></div>
				</div>
				<div class="col-3 loader-section section-right">
					<div class="bg"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Soleos loader -->

		<!-- Desktop and Mobile Menu -->
		<header class="header-wrap header-1">
			<div class="container-fluid d-flex justify-content-between align-items-center">
				<div class="logo">
					<a href="<?php echo esc_url(home_url('/')); ?>">
						<?php the_custom_logo(); ?>
					</a>
				</div>
				<div class="header-right-area d-flex justify-content-between">
					<div class="main-menu d-none d-xl-block me-xl-5">
						<!-- <ul>
							<li><a href="#">Home </a></li>
							<li><a href="#">About</a></li>
							<li>
								<a href="#">Solutions <i class="fal fa-plus"></i></a>
								<ul class="sub-menu">
									<li><a href="#">about 2</a></li>
									<li><a href="#">team</a></li>
									<li><a href="#">faq</a></li>
									<li><a href="#">projects</a></li>
									<li><a href="#">projects 2</a></li>
									<li><a href="#">Pricing</a></li>
									<li><a href="#">Pricing 2</a></li>
									<li><a href="#">services 2</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Products <i class="fal fa-plus"></i></a>
								<ul class="sub-menu">
									<li><a href="#">about 2</a></li>
									<li><a href="#">team</a></li>
									<li><a href="#">faq</a></li>
									<li><a href="#">projects</a></li>
									<li><a href="#">projects 2</a></li>
									<li><a href="#">Pricing</a></li>
									<li><a href="#">Pricing 2</a></li>
									<li><a href="#">services 2</a></li>
								</ul>
							</li>
							<li><a href="#">Sector</a></li>
							<li><a href="#">Contact</a></li>
							<li class="languages">
								<select name="languages">
									<option value="en">EN</option>
									<option value="es">ES</option>
									<option value="pt">PT</option>
									<option value="fr">FR</option>
									<option value="zh">ZH</option>
								</select>
							</li>
						</ul> -->
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'header-menu',
									'menu_id'        => 'primary-menu',
									'container'        => 'ul',
								)
							);
							?>
					</div>
					<div class="header-right-elements d-flex align-items-center justify-content-between">
						<a href="#" class="theme-btn style-3 d-none d-sm-block mobiledis">Download</a>
						<div class="d-inline-block ms-4 d-xl-none">
							<div class="mobile-nav-wrap">
								<div id="hamburger">
									<i class="fal fa-bars"></i>
								</div>
								<!-- mobile menu - responsive menu  -->
								<div class="mobile-nav">
									<button type="button" class="close-nav">
										<i class="fal fa-times-circle"></i>
									</button>
									<nav class="sidebar-nav">
										<ul class="metismenu" id="mobile-menu">
											<li>
												<a class="has-arrow" href="#">Homes</a>
												<ul class="sub-menu">
													<li><a href="#">homepage 1</a></li>
													<li><a href="#">homepage 2</a></li>
													<li><a href="#">homepage 3</a></li>
													<li><a href="#">homepage 4</a></li>
												</ul>
											</li>
											<li><a href="#">Services</a></li>
											<li><a href="#">portfolio</a></li>
											<li>
												<a class="has-arrow" href="#">Pages</a>
												<ul class="sub-menu">
													<li><a href="#">faq</a></li>
													<li><a href="#">services details</a></li>
													<li><a href="#">Team</a></li>
												</ul>
											</li>
											<li><a href="#">News</a></li>
											<li><a href="#">Contact</a></li>
										</ul>
									</nav>
									<div class="action-bar">
										<a href="mailto:modinatheme@gmail.com"><i class="fal fa-envelope"></i>info@webmail.com</a>
										<a href="tel:123-456-7890"><i class="fal fa-phone"></i>987-098-098-09</a>
										<a href="c#" class="d-btn theme-btn">Contact Us</a>
									</div>
								</div>
							</div>
							<div class="overlay"></div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- End Desktop and Mobile Menu -->
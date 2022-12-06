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
<html <?php language_attributes(); ?> class="sizes customelements history pointerevents postmessage webgl websockets cssanimations csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth csscolumns-breakbefore csscolumns-breakafter csscolumns-breakinside flexbox picture srcset webworkers">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('body-wrapper font-cambria carousel-caption-1'); ?>>
	<?php wp_body_open(); ?>
	<!-- Start Soleos loader -->
	<div id="preloader" class="preloader">
		<div class="animation-preloader">
			<div class="spinner">
			</div>
			<div class="txt-loading">
				<span data-text-preloader="S" class="letters-loading">
					S
				</span>
				<span data-text-preloader="O" class="letters-loading">
					O
				</span>
				<span data-text-preloader="L" class="letters-loading">
					L
				</span>
				<span data-text-preloader="E" class="letters-loading">
					E
				</span>
				<span data-text-preloader="O" class="letters-loading">
					O
				</span>
				<span data-text-preloader="S" class="letters-loading">
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
				<?php the_custom_logo(); ?>
			</div>
			<div class="header-right-area d-flex justify-content-between">
				<div class="main-menu d-none d-xl-block me-xl-5">
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
				<?php 
				$menu_1_link = get_field('menu_button', 'option');
				if( $menu_1_link ): 
					$menu_1_link_url = $menu_1_link['url'];
					$menu_1_link_title = $menu_1_link['title'];
					$menu_1_link_target = $menu_1_link['target'] ? $menu_1_link['target'] : '_self';
					?>
					<a class="theme-btn style-3 d-none d-sm-block mobiledis" href="<?php echo esc_url( $menu_1_link_url ); ?>" target="<?php echo esc_attr( $menu_1_link_target ); ?>"><?php echo esc_html( $menu_1_link_title ); ?></a>
				<?php endif; ?>
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
									<?php
									wp_nav_menu(
										array(
											'theme_location' => 'mobile-menu',
											'menu_id'        => 'mobile-menu',
											'container'      => 'ul',
											'menu_class'     => 'metismenu',
										)
									);
									?>
								</nav>
								<div class="action-bar">
									<?php 
									$email_menu = get_field('email', 'option');
									$phone_menu = get_field('phone', 'option');
									?>
									<?php if( !empty( $email_menu ) ):?>
									<a href="mailto:<?php echo $email_menu;?>"><i class="fal fa-envelope"></i><?php echo $email_menu;?></a>
									<?php endif; ?>

									<?php if( !empty( $phone_menu ) ):?>
									<a href="tel:<?php echo $phone_menu;?>"><i class="fal fa-phone"></i><?php echo $phone_menu;?></a>
									<?php endif; ?>

									<?php 
									$menu_2_link = get_field('menu_button', 'option');
									if( $menu_2_link ): 
										$menu_2_link_url = $menu_2_link['url'];
										$menu_2_link_title = $menu_2_link['title'];
										$menu_2_link_target = $menu_2_link['target'] ? $menu_2_link['target'] : '_self';
										?>
										<a class="d-btn theme-btn" href="<?php echo esc_url( $menu_2_link_url ); ?>" target="<?php echo esc_attr( $menu_2_link_target ); ?>"><?php echo esc_html( $menu_2_link_title ); ?></a>
									<?php endif; ?>
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
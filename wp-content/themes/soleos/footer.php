<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package soleos
 */

?>

<!--Footer-->
<footer class="footer-5 ">
	<div class="footer-widgets-wrapper text-white">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-xl-4 col-12">
					<div class="footer-site-info">
						<?php 
						$footer_logo = get_field('footer_logo', 'option');
						$about_content = get_field('about_content', 'option');
						?>
						<?php if($footer_logo) : ?>
						<a href="<?php echo esc_url(home_url('/')); ?>">
							<img src="<?php echo esc_url( $footer_logo['url'] ); ?>" alt="<?php bloginfo('title'); ?>">
						</a>
						<?php endif; ?>

						<?php if(!empty($about_content)) : ?>
						<p class="pt-35 pb-35"><?php echo $about_content; ?></p>
						<?php endif; ?>
					</div>
				</div>
				
				<div class="col-12 col-sm-6 col-md-3 col-xl-2 pl-xl-5 offset-xl-1">
				<?php 
					$col_2_heading = get_field('col_2_heading', 'option');
					$col_2_link = get_field('col_2_link', 'option');
				?>
					<div class="single-footer-wid">
						<?php if(!empty($col_2_heading)) : ?>
						<div class="wid-title">
							<h3><?php echo $col_2_heading; ?></h3>
						</div>
						<?php endif; ?>

						<?php if($col_2_link) : ?>
						<?php
							wp_nav_menu(
								array(
									'theme_location' => $col_2_link['value'],
									'container'        => 'ul',
								)
							);
						?>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-sm-6 col-xl-2 col-12 col-md-3">
				<?php 
					$col_3_heading = get_field('col_3_heading', 'option');
					$col_3_link = get_field('col_3_link', 'option');
				?>
					<div class="single-footer-wid">
						<?php if(!empty($col_3_heading)) : ?>
						<div class="wid-title">
							<h3><?php echo $col_3_heading; ?></h3>
						</div>
						<?php endif; ?>

						<?php if($col_3_link) : ?>
						<?php
							wp_nav_menu(
								array(
									'theme_location' => $col_3_link['value'],
									'container'        => 'ul',
								)
							);
						?>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-sm-6 col-xl-3 col-12 ps-xl-5 col-md-6">
					<div class="single-footer-contact single-footer-wid newsletter_widget style-2">
					<?php 
						$col_4_phone_1 = get_field('col_4_phone_1', 'option');
						$col_4_phone_2 = get_field('col_4_phone_2', 'option');
						$col_4_email_1 = get_field('col_4_email_1', 'option');
						$col_4_email_2 = get_field('col_4_email_2', 'option');
						$col_4_address = get_field('col_4_address', 'option');
					?>
						<div class="wid-title">
							<h3>Contact Info</h3>
						</div>
						<div class="contant-footer">
						<?php if(!empty($col_4_phone_1) && !empty($col_4_phone_2)): ?>
							<div class="call d-flex align-items-start">
								<div class="icon">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/call.svg" alt="">
								</div>
								<div class=" ms-4 call-num">
									<?php if(!empty($col_4_phone_1)): ?>
									<p> <a href="tel:<?php echo str_replace(' ','',$col_4_phone_1); ?>"><?php echo $col_4_phone_1; ?></a></p>
									<?php endif; ?>

									<?php if(!empty($col_4_phone_2)): ?>
									<p> <a href="tel:<?php echo str_replace(' ','',$col_4_phone_2); ?>"><?php echo $col_4_phone_2; ?></a></p>
									<?php endif; ?>
								</div>
							</div>
							<?php endif; ?>

							<?php if(!empty($col_4_email_1) && !empty($col_4_email_2)): ?>
							<div class="email d-flex align-items-start">
								<div class="icon"><i class="fal fa-envelope"></i></div>
								<div class=" ms-4 call-num">
									<?php if(!empty($col_4_email_1)): ?>
										<p> <a href="mailto:<?php echo $col_4_email_1;?>"> <?php echo $col_4_email_1;?> </a> </p>
									<?php endif; ?>
									<?php if(!empty($col_4_email_2)): ?>
										<p> <a href="mailto:<?php echo $col_4_email_2;?>"> <?php echo $col_4_email_2;?> </a> </p>
									<?php endif; ?>
								</div>
							</div>
							<?php endif; ?>

							<?php if(!empty($col_4_address)): ?>
							<div class="location d-flex align-items-start">
								<div class="icon"><i class="fal fa-map-marker-alt"></i></div>
								<div class="ms-4 call-num mt-0">
									<p><?php echo $col_4_address;?></p>
								</div>
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $copyright = get_field('copyright', 'option'); 
	if(!empty($copyright)): ?>
	<div class="footer-bottom">
		<div class="container">
			<hr>
			<div class="row align-items-center py-4">
				<div class="col-md-6 col-12 text-center text-md-start">
					<div class="copyright-info">
						<p><?php echo $copyright; ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
</footer>


<?php wp_footer(); ?>

</body>

</html>
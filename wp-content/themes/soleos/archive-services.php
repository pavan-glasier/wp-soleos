<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soleos
 */

get_header();
?>

<!--Firs Section -->
<div class="bg-pattern" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/pattern-3.png'); background-size: 58%;">
	<div>
		<div class="main-slider__shape-1">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shape-1.png" alt="">
		</div>
		<div class="main-slider__shape-8">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shape-1.png" alt="">
		</div>
		<div class="main-slider__shape-61">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shape-1.png" alt="">
		</div>
		<div class="main-slider__shape-21">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shape-2.png" alt="">
		</div>
		<div class="main-slider__shape-71">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shape-2.png" alt="">
		</div>
		<div class="main-slider__shape-group">
			<div class="main-slider__shape-3">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shape-3.png" alt="">
			</div>
			<div class="main-slider__shape-4">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shape-4.png" alt="">
			</div>
			<div class="main-slider__shape-5">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shape-5.png" alt="">
			</div>
		</div>
	</div>
	<section class="hero-wrapper hero-3">
		<div class="welcome-slide">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 style="text-align: center;"><?php the_archive_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!--End Firs Section -->

<?php if (have_posts()) : ?>

	<!--Secound Section -->
	<section class="about-our-agency section-padding fix" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/bg-img.png'); background-repeat: no-repeat; background-position: right 380px; background-color: #F9F9F9;">
		<div class="container">
			<?php if(!empty(get_field('services_heading', 'services_archive'))): ?>
			<div class="row mtm-30">
				<div class="col-md-12">
					<h2 class="servicetext"><?php echo get_field('services_heading', 'services_archive');?></h2>
					<?php if(!empty(get_field('services_description', 'services_archive'))): ?>
					<p class="text-center mb-50"><?php echo get_field('services_description', 'services_archive');?></p>
					<?php endif; ?>
				</div>
			</div>
			<?php endif; ?>
			<div class="row mtm-30">
				<?php while (have_posts()) : the_post(); ?>
					<div class="col-md-6 col-12 col-lg-4 mt-30">
						<div class="single-service-box style-1">
							<?php
							if (has_post_thumbnail()) : ?>
								<div class="service-bg bg-cover" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>')">
								</div>
							<?php else : ?>
								<div class="service-bg bg-cover" style="background-color: #000;">
								</div>
							<?php endif; ?>
							<div class="icon" style="-webkit-mask-image: url(<?php echo get_field('icon')['url']; ?>);"></div>
							<div class="contents">
								<h4><a href="<?php the_permalink();?>"><?php echo get_the_title();?></a></h4>
								<p style="text-align: justify;">
								<?php echo wp_trim_words( get_the_content(), 15, '..');?>
								</p>
								<div class="post-btn-link mt-3 boxhover">
									<a href="<?php the_permalink();?>" class="read-btn">Read More <i class="fal fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>

			</div>
		</div>
	</section>
	<!--End Secound Section -->

	<?php if (have_rows('sections', 'services_archive')) : ?>

		<?php while (have_rows('sections', 'services_archive')) : the_row(); ?>
			<?php if (get_row_layout() == 'cta_section') : ?>
				<!--Thired Section -->
				<section class="pricing-cta-wrapper text-white bg-cover bg-center section-padding" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/pricing-cta-bg.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-12 text-center col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 ps-xl-0 pe-xl-0">
								<div class="pricing-contents">
									<h1><?php echo get_sub_field('title'); ?></h1>
									<div class="btn-wrapper d-flex align-items-end justify-content-center">
										<?php
										$link_button_link = get_sub_field('link_button');
										if ($link_button_link) :
											$link_button_link_url = $link_button_link['url'];
											$link_button_link_title = $link_button_link['title'];
											$link_button_link_target = $link_button_link['target'] ? $link_button_link['target'] : '_self';
										?>
											<a href="<?php echo esc_url($link_button_link_url); ?>" target="<?php echo esc_attr($link_button_link_target); ?>"><?php echo esc_html($link_button_link_title); ?></a>
										<?php endif; ?>
										<div class="btn-cta">
											<div class="icon">
												<i class="flaticon-24-hours"></i>
											</div>
											<div class="content">
												<span class="text-star">Call for support</span>
												<h3><?php echo get_sub_field('phone_number'); ?></h3>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--End Thired Section -->
			<?php endif; ?>
		<?php endwhile; ?>

		<?php while (have_rows('sections', 'services_archive')) : the_row(); ?>
			<?php if (get_row_layout() == 'featured_section') : ?>
				<section class="best-featured-wrapper section-padding pb-5" style="background-color: #fbfbfb;">
					<div class="container">
						<div class="row mtm-40 align-items-center">
							<div class="col-lg-4 col-md-6 col-12">
								<?php if (have_rows('left_features')) : ?>
									<?php while (have_rows('left_features')) : the_row(); ?>
										<div class="single-best-featured right">
											<div class="icon" style="-webkit-mask-image: url(<?php echo get_sub_field('icon')['url']; ?>);">
												<!-- <i class="flaticon-flow-chart"></i> -->
											</div>
											<div class="content-text">
												<h5><?php echo get_sub_field('title'); ?></h5>
												<p><?php echo get_sub_field('content'); ?></p>
											</div>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>

							<div class="col-lg-4 p-md-0 mt-5 mb-5 mt-md-0 mb-md-0 col-md-6 col-12">
								<div class="center-img text-center mbm-50">
									<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/mill.gif" alt="">
								</div>
							</div>

							<div class="col-lg-4 col-md-6 col-12">
								<?php if (have_rows('right_features')) : ?>
									<?php while (have_rows('right_features')) : the_row(); ?>
										<div class="single-best-featured">
											<div class="icon" style="-webkit-mask-image: url(<?php echo get_sub_field('icon')['url']; ?>);">
												<!-- <i class="flaticon-flow-chart"></i> -->
											</div>
											<div class="content-text">
												<h5><?php echo get_sub_field('title'); ?></h5>
												<p><?php echo get_sub_field('content'); ?></p>
											</div>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</section>
			<?php endif; ?>
		<?php endwhile; ?>

		<?php while (have_rows('sections', 'services_archive')) : the_row(); ?>
			<?php if (get_row_layout() == 'counter_and_faq_section') : ?>
				<section class="faq-funfact-section section-padding pb-0">
					<div class="container">
						<?php if (have_rows('counter')) : ?>
							<div class="fun-fact-wrapper text-white mtm-30 text-center">
								<div class="row">
									<?php while (have_rows('counter')) : the_row(); ?>
										<div class="col-lg-3 col-md-6 col-12">
											<div class="single-fun-fact">
												<h2><span class="is-visible"><?php echo get_sub_field('number'); ?></span><?php echo get_sub_field('prefix'); ?></h2>
												<h3><?php echo get_sub_field('title'); ?></h3>
											</div>
										</div>
									<?php endwhile; ?>
								</div>
							</div>
						<?php endif; ?>

						<div class="faq-wrapper section-padding pb-0">
							<div class="row equal">
								<?php if (have_rows('faqs')) : $accordionID = 1;
									while (have_rows('faqs')) : the_row(); ?>
										<div class="col-lg-6 col-12 col-xl-7 pe-lg-0">
											<?php if (have_rows('faq')) : $rowCount = 1; ?>
												<div class="faq-content">
													<div class="faq-accordion">
														<div class="accordion" id="accordion_<?php echo $accordionID; ?>">
															<?php while (have_rows('faq')) : the_row(); ?>
																<div class="accordion-item">
																	<h4 class="accordion-header">
																		<button class="accordion-button <?php echo ($rowCount == 1) ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#faq_<?php echo $rowCount; ?>" aria-expanded="<?php echo ($rowCount == 1) ? 'false' : ''; ?>" aria-controls="faq_<?php echo $rowCount; ?>">
																			<?php echo get_sub_field('title'); ?>
																		</button>
																	</h4>
																	<div id="faq_<?php echo $rowCount; ?>" class="accordion-collapse collapse <?php echo ($rowCount == 1) ? 'show' : ''; ?>" data-bs-parent="#accordion_<?php echo $accordionID; ?>">
																		<div class="accordion-body">
																			<?php echo get_sub_field('content'); ?>
																		</div>
																	</div>
																</div>
															<?php $rowCount++;
															endwhile; ?>
														</div>
													</div>
												</div>
											<?php endif; ?>
										</div>
								<?php $accordionID++;
									endwhile;
								endif; ?>
								<div class="col-xl-5 col-lg-6 col-12 ps-lg-0">
									<?php $video_box = get_sub_field('video_box');
									if ($video_box) : ?>
										<div class="video-popup-wrapper d-flex justify-content-center align-items-center bg-cover bg-center" style="background-image: url('<?php echo esc_url($video_box['image']['url']); ?>')">
											<?php if (!empty($video_box['video_link'])) : ?>
												<div class="video-play-btn">
													<a href="<?php echo esc_url($video_box['video_link']); ?>" class="popup-video play-video"><i class="fas fa-play"></i></a>
												</div>
											<?php endif; ?>
										</div>
									<?php endif; ?>
								</div>
							</div>
						</div>

					</div>
				</section>
			<?php endif; ?>
		<?php endwhile; ?>

		<?php while (have_rows('sections', 'services_archive')) : the_row(); ?>
			<?php if (get_row_layout() == 'logo_section') : ?>
				<div class="brand-carousel-wrapper section-padding">
					<div class="container">
						<?php if (!empty(get_sub_field('heading'))) : ?>
							<div class="row mb-5">
								<div class="col-md-12">
									<h2 style="text-align: center; margin-bottom: 30px; font-size: 45px;"><?php echo get_sub_field('heading'); ?></h2>
								</div>
							</div>
						<?php endif; ?>
						<?php $logos = get_sub_field('logos');
						if ($logos) : ?>
							<div class="row mt-5">
								<div class="col-xl-12 col-12">
									<div class="brand-carousel-active owl-carousel">
										<?php foreach ($logos as $logo) : ?>
											<div class="single-brand-logo">
												<img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
											</div>
										<?php endforeach; ?>
									</div>
								</div>
							</div>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>


<?php
else :
	get_template_part('template-parts/content', 'none');
endif; ?>
<?php get_footer(); ?>
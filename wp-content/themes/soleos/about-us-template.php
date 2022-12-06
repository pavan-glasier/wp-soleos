<?php

/**
 * Template Name: About Us
 *
 */

get_header(); ?>


<!--Firs Section -->
<div class="bg-pattern" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/pattern-3.png'); background-size: 58%;">
   <div>
      <div class="main-slider__shape-1">
         <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/shape-1.png" alt="">
      </div>
      <div class="main-slider__shape-8">
         <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/shape-1.png" alt="">
      </div>
      <div class="main-slider__shape-61">
         <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/shape-1.png" alt="">
      </div>
      <div class="main-slider__shape-21">
         <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/shape-2.png" alt="">
      </div>
      <div class="main-slider__shape-71">
         <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/shape-2.png" alt="">
      </div>
      <div class="main-slider__shape-group">
         <div class="main-slider__shape-3">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/shape-3.png" alt="">
         </div>
         <div class="main-slider__shape-4">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/shape-4.png" alt="">
         </div>
         <div class="main-slider__shape-5">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/shape-5.png" alt="">
         </div>
      </div>
   </div>
   <section class="hero-wrapper hero-3">
      <div class="welcome-slide">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 style="text-align: center;"><?php the_title();?></h1>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<!--End Firs Section -->



<?php while ( have_rows('sections') ) : the_row();?>
  <?php if( get_row_layout() == 'about_section' ) :
  $about_content_group = get_sub_field('content_group');
  $about_image_group = get_sub_field('image_group');
?>
<!--Secound Section -->
<section class="about-our-agency section-padding fix" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bg-img.png'); background-repeat: no-repeat; background-position: right 380px; background-color: #fff;">
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-5 col-12">
            <?php if($about_image_group): ?>
            <div class="img-block-pop-video">
               <?php if($about_image_group['main_image']):?>
               <img src="<?php echo esc_url( $about_image_group['main_image']['url'] ); ?>" alt="<?php echo esc_attr( $about_image_group['main_image']['alt'] ); ?>">
               <?php endif; ?>

               <div class="popup-video-block d-flex justify-content-center align-items-center bg-cover" style="background-image: url('<?php echo esc_url( $about_image_group['video_image']['url'] ); ?>')">
                  <?php if( !empty( $about_image_group['video_link'] ) ):?>
                  <div class="video-play-btn">
                     <a href="<?php echo $about_image_group['video_link']; ?>" class="popup-video"><i class="fas fa-play"></i></a>                     
                  </div>
                  <?php endif; ?>
               </div>
               
            </div>
            <?php endif; ?>
         </div>
         <div class="col-xl-6 col-lg-7 col-md-10 col-12">
            <?php if($about_content_group): ?>
            <div class="block-contents">
               <?php if(!empty($about_content_group['heading'])): ?>
               <div class="section-title">
                  <span><?php echo $about_content_group['tag_line']; ?></span>
                  <h2 style="font-size: 45px;"><?php echo $about_content_group['heading']; ?></h2>
               </div>
               <?php endif; ?>
               <?php if(!empty( $about_content_group['content'] )): ?>
               <p style="text-align: justify;"><?php echo $about_content_group['content']; ?></p>
               <?php endif; ?>
            </div>
            <?php endif; ?>
         </div>
      </div>
   </div>
</section>
<!--End Secound Section -->
<?php endif; ?>
<?php endwhile; ?>



<?php while ( have_rows('sections') ) : the_row();?>
  <?php if( get_row_layout() == 'counter_section' ) :
?>
<!--Thired Section -->
<section class="about-banner-wrapper section-padding theme-bg" style="padding: 50px 0px;">
   <div class="container">
      <?php if( !empty( get_sub_field('heading') ) ) : ?>
      <div class="row">
         <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">
            <div class="block-contents">
               <div class="section-title">
                  <span><?php echo get_sub_field('tag_line');?></span>
                  <h2 class="text-white"><?php echo get_sub_field('heading');?></h2>
               </div>
            </div>
         </div>
      </div>
      <?php endif; ?>
      <?php if( have_rows('counter') ): ?>
      <div class="row mt-5">
         <?php while( have_rows('counter') ) : the_row(); ?>
         <div class="col-md-3 col-lg-3">
            <div class="single-fun-fact style-2">
               <h2>
                  <span class="is-visible" style="visibility: visible;" ><?php echo get_sub_field('number'); ?></span><?php echo get_sub_field('affix'); ?>
               </h2>
               <h3><?php echo get_sub_field('title'); ?></h3>
            </div>
         </div>
         <?php endwhile; ?>
      </div>
      <?php endif;?>
   </div>
   <div class="icon-arrow-down">
      <div class="rotate-icon">
         <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/navigation.png" />
      </div>
   </div>
</section>
<!--End Thired Section -->
<?php endif; ?>
<?php endwhile; ?>


<?php while ( have_rows('sections') ) : the_row();?>
  <?php if( get_row_layout() == 'timeline_section' ) :
?>
<!--Time Line-->
<section class="company-timeline-wrapper section-padding">
   <div class="container">
      <div class="row mtm-40">
         <div class="col-lg-4 col-md-6 offset-lg-1 pe-lg-0">
         <?php if( have_rows('left_content') ): ?>
            <div class="timeline-content text-lg-end">
            <?php while( have_rows('left_content') ) : the_row(); ?>
               <div class="single-timeline-box">
                  <span><?php echo get_sub_field('years'); ?></span>
                  <h6><?php echo get_sub_field('title'); ?></h6>
                  <p><?php echo get_sub_field('details'); ?></p>
               </div>
            <?php endwhile; ?>
            </div>
         <?php endif; ?>
         </div>

         <div class="col-lg-2 d-none mt-40 d-lg-block">
         <?php if( have_rows('center_images') ): ?>
            <div class="time-line-icon">
               <?php while( have_rows('center_images') ) : the_row(); ?>
               <div class="single-icon">
                  <img src="<?php echo esc_url( get_sub_field('image')['url'] ); ?>" alt="<?php echo esc_attr( get_sub_field('image')['alt'] ); ?>">
               </div>
               <?php endwhile; ?>
            </div>
            <?php endif; ?>
         </div>

         <div class="col-lg-4 col-md-6 ps-lg-0">
         <?php if( have_rows('right_content') ): ?>
            <div class="timeline-content">
            <?php while( have_rows('right_content') ) : the_row(); ?>
               <div class="single-timeline-box">
                  <span><?php echo get_sub_field('years'); ?></span>
                  <h6><?php echo get_sub_field('title'); ?></h6>
                  <p><?php echo get_sub_field('details'); ?></p>
               </div>
            <?php endwhile; ?>
            </div>
         <?php endif; ?>
         </div>
      </div>

      <?php if( have_rows('icon_box') ): ?>
      <div class="row mt-lg-5 mt-3">
         <?php while( have_rows('icon_box') ) : the_row(); ?>
         <div class="col-md-6 col-12 col-lg-4">
            <div class="single-icon-border-box">
               <div class="icon">
                  <img src="<?php echo esc_url( get_sub_field('icon')['url'] ); ?>" alt="<?php echo esc_attr( get_sub_field('icon')['alt'] ); ?>" />
               </div>
               <div class="content">
                  <h6><?php echo get_sub_field('title'); ?></h6>
               </div>
            </div>
         </div>
         <?php endwhile; ?>
      </div>
      <?php endif; ?>
   </div>
</section>
<!--End Time Line-->
<?php endif; ?>
<?php endwhile; ?>



<?php while ( have_rows('sections') ) : the_row();?>
  <?php if( get_row_layout() == 'testimonial_section' ) :
 $display_testimonial = get_sub_field('display_testimonial');
 if($display_testimonial):
?>
<!--Testimonial-->
<?php 
$testi_args = array(
   'post_type' => 'testimonial',
   'order' => 'DESC',
   'posts_per_page' => -1,
   ); 
?>
<?php $testi_query = new WP_Query($testi_args);
if ($testi_query->have_posts()) : ?>
<section class="testimonial-wrapper section-padding pt-0">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-xl-8 pe-xl-5 col-lg-6 mt-5 mt-lg-0 order-2 order-lg-1">
            <div class="testimonial-carousel-list owl-carousel me-xl-5">
               <?php while ($testi_query->have_posts()) : $testi_query->the_post(); ?>
               <div class="single-testimonial-carousel">
                  <div class="icon">
                     <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/quotes.png" alt="">
                  </div>
                  <p><?php the_content(); ?></p>
                  <span><b><?php the_title(); ?></b> <?php the_field('designation'); ?></span>
               </div>
               <?php endwhile;?>
            <?php wp_reset_postdata(); ?>
            </div>
         </div>
         <div class="col-xl-4 col-lg-6 order-1 order-lg-2">
            <?php if(get_sub_field('image')): ?>
            <div class="testimonial-img-right">
               <img src="<?php echo esc_url( get_sub_field('image')['url'] ); ?>" alt="<?php echo esc_attr( get_sub_field('image')['alt'] ); ?>">
            </div>
            <?php endif; ?>
         </div>
      </div>
   </div>
</section>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<?php endwhile; ?>


<?php while ( have_rows('sections') ) : the_row();?>
  <?php if( get_row_layout() == 'logo_section' ) : ?>
<div class="brand-carousel-wrapper section-padding">
   <div class="container">
      <?php if(!empty(get_sub_field('heading'))): ?>
      <div class="row mb-5">
         <div class="col-md-12">
            <h2 style="text-align: center; margin-bottom: 30px; font-size: 45px;"><?php echo get_sub_field('heading');?></h2>
         </div>
      </div>
      <?php endif; ?>
      <?php $logos = get_sub_field('logos');
      if( $logos ): ?>
      <div class="row mt-5">
         <div class="col-xl-12 col-12">
            <div class="brand-carousel-active owl-carousel">
            <?php foreach( $logos as $logo ): ?>
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


<?php get_footer(); ?>
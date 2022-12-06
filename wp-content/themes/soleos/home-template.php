<?php

/**
 * Template Name: Home Page
 *
 */

get_header(); ?>

<?php while ( have_rows('section') ) : the_row();?>
  <?php if( get_row_layout() == 'banner_section' ) :
  $banner_contents_group = get_sub_field('contents_group');
  $banner_images = get_sub_field('images');
?>
<!--Firs Section -->
<div class="bg-pattern" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/pattern-3.png'); background-size: 58%;">
   <div>
      <div class="main-slider__shape-1">
         <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/shape-1.png" alt="">
      </div>
      <div class="main-slider__shape-8">
         <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/shape-1.png" alt="">
      </div>
      <div class="main-slider__shape-6">
         <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/shape-1.png" alt="">
      </div>
      <div class="main-slider__shape-2">
         <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/shape-2.png" alt="">
      </div>
      <div class="main-slider__shape-7">
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
               <div class="col-xl-8 pe-lg-0">
                  <div class="hero-content text-center text-md-start">
                     <?php if( !empty( $banner_contents_group['heading'] ) ): ?>
                     <h1><?php echo $banner_contents_group['heading']; ?></h1>
                     <?php endif; ?>
                     
                     <?php if( !empty( $banner_contents_group['description'] ) ): ?>
                     <p><?php echo $banner_contents_group['description']; ?></p>
                     <?php endif; ?>

                     <?php 
                     $banner_link = $banner_contents_group['link'];
                     if( $banner_link ): 
                        $banner_link_url = $banner_link['url'];
                        $banner_link_title = $banner_link['title'];
                        $banner_link_target = $banner_link['target'] ? $banner_link['target'] : '_self';
                        ?>
                        <a class="theme-btn style-3 mt-35" href="<?php echo esc_url( $banner_link_url ); ?>" target="<?php echo esc_attr( $banner_link_target ); ?>"><?php echo esc_html( $banner_link_title ); ?></a>
                     <?php endif; ?>

                     <?php if( have_rows('contents_group') ): while ( have_rows('contents_group') ) : the_row(); ?> 
                        <?php if( have_rows('counter') ): ?> 
                        <div class="hero-funfact mt-5">
                           <div class="row">
                           <?php while ( have_rows('counter') ) : the_row(); ?>
                              
                              <div class="col-lg-3 col-md-6 col-12">
                                 <div class="single-fun-fact mt-4">
                                    <h2><span class="is-visible"><?php echo get_sub_field('number');?></span><?php echo get_sub_field('prefix');?></h2>
                                    <h3><?php echo get_sub_field('text');?></h3>
                                 </div>
                              </div>
                           <?php endwhile; ?> 
                           </div>
                        </div>
                        <?php endif; ?>
                     <?php endwhile; endif; ?>
                     
                  </div>
               </div>
               <div class="col-xl-4">
                  <?php if($banner_images): ?>
                  <div class="hero-image">
                     <div class="big-img">
                        <img src="<?php echo esc_url( $banner_images['image_2']['url'] ); ?>" alt="<?php echo esc_attr( $banner_images['image_2']['alt'] ); ?>">
                     </div>
                     <div class="card-img">
                        <img src="<?php echo esc_url( $banner_images['image_1']['url'] ); ?>" alt="<?php echo esc_attr( $banner_images['image_1']['alt'] ); ?>">
                     </div>
                  </div>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<!--End Firs Section -->
<?php endif; ?>
<?php endwhile; ?>


<?php while ( have_rows('section') ) : the_row();?>
  <?php if( get_row_layout() == 'image_content_section' ) :
  $about_contents_group = get_sub_field('contents_group');
?>
<!--Secound Section -->
<section class="about-our-agency section-padding fix" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bg-img.png'); background-repeat: no-repeat; background-position: right 380px;">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-xl-6 col-lg-6 pe-xl-5 ps-xl-5 col-12">
            <div class="about-company-img">
               <img src="<?php echo esc_url( get_sub_field('image')['url'] ); ?>" alt="<?php echo esc_attr( get_sub_field('image')['alt'] ); ?>">
            </div>
         </div>
         <div class="col-xl-6 col-lg-6 col-12 mt-5 mt-lg-0">
         <?php if($about_contents_group): ?>
            <div class="section-title-3">
               <?php if(!empty($about_contents_group['tag_line'])): ?>
               <h6><?php echo $about_contents_group['tag_line']; ?></h6>
               <?php endif; ?>

               <?php if(!empty($about_contents_group['heading'])): ?>
               <h2><?php echo $about_contents_group['heading']; ?></h2>
               <?php endif; ?>

               <?php if(!empty($about_contents_group['details'])): ?>
               <p><?php echo $about_contents_group['details']; ?></p>
               <?php endif; ?>
            </div>

            <?php if( have_rows('contents_group') ): while ( have_rows('contents_group') ) : the_row(); ?> 
               <?php if( have_rows('points') ): ?> 
               <?php while ( have_rows('points') ) : the_row(); ?>
               
               <div class="icon-features-item mt-40">
                  <div class="icon">
                     <img src="<?php echo esc_url( get_sub_field('icon')['url'] ); ?>" alt="<?php echo esc_attr( get_sub_field('icon')['alt'] ); ?>">
                  </div>
                  <div class="content">
                     <h4><?php echo get_sub_field('title'); ?></h4>
                     <p><?php echo get_sub_field('description'); ?></p>
                  </div>
               </div>
               <?php endwhile; ?>
               <?php endif; ?>
            <?php endwhile; endif; ?>
            
            <?php 
               $about_link = $about_contents_group['link'];
               if( $about_link ): 
                  $about_link_url = $about_link['url'];
                  $about_link_title = $about_link['title'];
                  $about_link_target = $about_link['target'] ? $about_link['target'] : '_self';
               ?>
               <a class="theme-btn style-3 mt-30" href="<?php echo esc_url( $about_link_url ); ?>" target="<?php echo esc_attr( $about_link_target ); ?>"><?php echo esc_html( $about_link_title ); ?></a>
               <?php endif; ?>

            <?php endif; ?>
         </div>
      </div>
   </div>
</section>
<!--End Secound Section -->
<?php endif; ?>
<?php endwhile; ?>



<?php while ( have_rows('section') ) : the_row();?>
  <?php if( get_row_layout() == 'service_section' ) :
 $display_services = get_sub_field('display_services');
 if($display_services):
?>
<!--Thired Section -->
<section class="service-one">
   <div class="container">
      <!-- Section Title -->
      <?php if(!empty(get_sub_field('heading'))): ?>
      <div class="section-title centered">
         <?php if(!empty(get_sub_field('tag_line'))): ?>
         <span class="section-title__tagline"><?php echo get_sub_field('tag_line');?></span>
         <?php endif; ?>

         <h2 class="section-title__title"><?php echo get_sub_field('heading');?></h2>

         <?php if(!empty(get_sub_field('description'))): ?>
         <div class="section-title__text"><?php echo get_sub_field('description');?></div>
         <?php endif; ?>

      </div>
      <?php endif; ?>

      <?php 
      $serv_args = array(
         'post_type' => 'services',
         'order' => 'DESC',
         'posts_per_page' => 3,
         ); 
         ?>
      <?php $serv_query = new WP_Query($serv_args);
         if ($serv_query->have_posts()) : $delay = 0;?>
      <div class="row clearfix">
         <?php while ($serv_query->have_posts()) : $serv_query->the_post(); ?>
         <!-- Service Single -->
         <div class="service-one__single col-lg-4 col-md-12 col-sm-12" >
            <div class="service-one__single-inner wow fadeInUp animated" data-wow-delay="<?php echo $delay;?>ms" data-wow-duration="1500ms">
               <!-- <i class="fal fa-long-arrow-right service-one__icon"></i> -->
               <img src="<?php echo esc_url( get_field('icon')['url'] ); ?>" class="service-one__icon" alt="<?php the_title();?>" />
               <!-- <i class="fa-solid fa-solar-panel service-one__icon"></i> -->
               <h3 class="service-one__title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
               <div class="service-one__text">
                  <?php echo wp_trim_words(get_the_content(), 15, "."); ?>
               </div>
               <a href="<?php the_permalink();?>" class="service-one__read-more">Read More
                  <i class="fal fa-long-arrow-right arrow_modification"></i>
               </a>
            </div>
         </div>
         <?php $delay+=150; endwhile;?>
         <?php wp_reset_postdata(); ?>
      </div>
      <?php endif; ?>
   </div>
</section>
<!--End Thired Section -->
<?php endif; ?>
<?php endif; ?>
<?php endwhile; ?>



<?php while ( have_rows('section') ) : the_row();?>
  <?php if( get_row_layout() == 'testimonial_section' ) :
 $display_testimonial = get_sub_field('display_testimonial');
 if($display_testimonial):
?>
<!--Testimonual-->
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



<?php while ( have_rows('section') ) : the_row();?>
  <?php if( get_row_layout() == 'blog_section' ) :
 $display_blogs = get_sub_field('display_blogs');
 if($display_blogs): ?>
<!--News Blog-->
<section class="blog-listing-wrapper section-padding pt-0">
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-8 mb-4 offset-xl-3 offset-lg-2 col-12 text-center">
            <?php if(!empty(get_sub_field('heading'))): ?>
            <div class="section-title-3">
               <?php if(!empty(get_sub_field('tag_line'))): ?>
               <span class="section-title__tagline"><?php echo get_sub_field('tag_line');?></span>
               <?php endif; ?>

               <h2 class="section-title__title"><?php echo get_sub_field('heading');?></h2>

               <?php if(!empty(get_sub_field('description'))): ?>
               <div class="section-title__text"><?php echo get_sub_field('description');?></div>
               <?php endif; ?>
            </div>
            <?php endif; ?>

         </div>
      </div>

   <?php 
   $blog_args = array(
      'post_type' => 'post',
      'order' => 'DESC',
      'posts_per_page' => 3,
      ); 
   ?>
   <?php $blog_query = new WP_Query($blog_args);
   if ($blog_query->have_posts()) : $animDly= 0; ?>
      <div class="row">
         <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
         <div class="col-xl-4 col-md-6 col-12 wow fadeInUp animated" data-wow-delay="<?php echo $animDly;?>ms" data-wow-duration="1500ms">
            <div class="single-news-card">
               <?php 
               if ( has_post_thumbnail() ) { ?>
                   <div class="post-thumb bg-cover" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'full' ); ?>')"></div>
               <?php }
               else { ?>
                    <div class="post-thumb bg-cover" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/b1.jpg')"></div>
               <?php } ?>
               <div class="content">
                  <div class="post-meta d-flex mb-10 align-items-center">
                     <div class="post-date me-4">
                        <i class="icon-calendar"></i> <?php echo get_the_date( 'd M, Y', get_the_ID() ); ?>
                     </div>
                     <div class="post-comment">
                        <i class="icon-chat"></i> <?php echo get_comments_number( get_the_ID() )?> comments
                     </div>
                  </div>
                  <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                  <div class="post-btn-link">
                     <a href="<?php the_permalink();?>" class="read-btn">Read More <i class="fal fa-long-arrow-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
         <?php $animDly+=100; endwhile;?>
         <?php wp_reset_postdata(); ?>
      </div>
   <?php endif; ?>
   </div>
</section>
<?php endif; ?>
<?php endif; ?>
<?php endwhile; ?>



<?php get_footer(); ?>
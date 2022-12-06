<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soleos
 */

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


<!--Secound Section -->
<section class="about-our-agency section-padding fix" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bg-img.png'); background-repeat: no-repeat; background-position: right 380px; background-color: #fff;">
   <div class="container">
      <div class="row">
         <div class="col-xl-12 col-lg-12 col-12">
		 <?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'soleos' ),
					'after'  => '</div>',
				)
			);
			?>
         </div>
		 <?php
		 if ( get_edit_post_link() ) : ?>
		<div class="col-xl-12 col-lg-12 col-12 mt-4">
			<a class="theme-btn style-3 float-end pt-2 pb-2 pe-4 ps-4" href="<?php echo get_edit_post_link(); ?>" target="_blank">Edit</a>
		</div><!-- .entry-footer -->
	<?php endif; ?>
      </div>
   </div>
</section>
<!--End Secound Section -->
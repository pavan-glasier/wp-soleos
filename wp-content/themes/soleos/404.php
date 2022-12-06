<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package soleos
 */

get_header();
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
   	<section class="hero-wrapper hero-3 p-0">
      	<!-- <div class="welcome-slide d-none">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 style="text-align: center;">ERROR 404</h1>
					</div>
				</div>
			</div>
      	</div> -->
   	</section>
</div>
<!--End Firs Section -->
<section class="error-404-wrapper section-padding fix" >
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="error-content">
					<h1>404</h1>
					<h2>Oops! this page is not found.</h2>
					<p>Sorry but the page you're looking for may broken or not created</p>
					<a href="<?php echo esc_url(home_url('/')); ?>" class="theme-btn style-3">Go Back to Home</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();

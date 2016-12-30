<?php
/*
Template Name: About
*/
?>
<?php
/**
 * The template for displaying About pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.1
 */

get_header(); ?>
<section class="about-page">
	<div class="site-content">
			<div class='about-hero'>
				<?php the_content(); ?>
				<h3><span>Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile. </h3>
			</div>
	</div><!-- .container -->
</section>

	<div id="primary" class="site-content">
		<div id="content" role="main">
<?php the_content(); ?>

			<?php while ( have_posts() ) : the_post();
				$services_description = get_field('services_description');
				$services_title_1 = get_field('services_title_1');
				$services_text_1 = get_field('services_text_1');
				$services_image_1 = get_field('services_image_1');
				$services_title_2 = get_field('services_title_2');
				$services_text_2 = get_field('services_text_2');
				$services_image_2 = get_field('services_image_2');
				$services_title_3 = get_field('services_title_3');
				$services_text_3 = get_field('services_text_3');
				$services_image_3 = get_field('services_image_3');
				$services_title_4 = get_field('services_title_4');
				$services_text_4 = get_field('services_text_4');
				$services_image_4 = get_field('services_image_4');
				$size = "full"; ?>

			<section class="services-description">
				<h2>Our Services</h4>
				<?php echo $services_description; ?>
			</section>

			<section class="service-content">
				<div class="services-image-left">
					<?php if($services_image_1) echo wp_get_attachment_image( $services_image_1, $size );
					?>
				</div>
				<div class="services-text-right">
					<h3><?php echo $services_title_1; ?></h3>
					<p><?php echo $services_text_1; ?></p>
				</div>

			</section>

			<section class="service-content">
				<div class="services-text-left">
					<h3><?php echo $services_title_2; ?></h3>
					<p><?php echo $services_text_2; ?></p>
				</div>
				<div class="services-image-right">
					<?php if($services_image_2) echo wp_get_attachment_image( $services_image_2, $size );
					?>
				</div>
			</section>

			<section class="service-content">
				<div class="services-image-left">
					<?php if($services_image_3) echo wp_get_attachment_image( $services_image_3, $size );
					?>
				</div>
				<div class="services-text-right">
					<h3><?php echo $services_title_3; ?></h3>
					<p><?php echo $services_text_3; ?></p>
				</div>
			</section>

			<section class="service-content">
				<div class="services-text-left">
					<h3><?php echo $services_title_4; ?></h3>
					<p><?php echo $services_text_4; ?></p>
				</div>
				<div class="services-image-right">
					<?php if($services_image_4) echo wp_get_attachment_image( $services_image_4, $size );
					?>
				</div>
			</section>
<div class="clearfix"></div>
		<div class="services-contact">
			<h2>Interested in working with us?</h2>
			<a class="button" id="contact-button" href="<?php echo home_url(); ?>/contact">Contact Us</a>
		</div>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>

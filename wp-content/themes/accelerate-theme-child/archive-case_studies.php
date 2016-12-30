<?php
/**
 * The template for displaying the case study archive page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.1
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post();
				$services = get_field('services');
				$link = get_field('site_link');
        $image_1 = get_field('image_1');
				$size = "full"; ?>

		<article class="case-study">
					<aside class="case-study-sidebar">
						<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
						<h5><?php echo $services; ?></h5>

						<?php the_content(); ?>

						<p><strong><a href="<?php the_permalink(); ?>">View Project ></a></strong></p>
					</aside>

					<div class="case-study-images">
						<a href="<?php the_permalink(); ?>"><?php if($image_1) echo wp_get_attachment_image( $image_1, $size );
						?></a>
					</div>
		</article>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>

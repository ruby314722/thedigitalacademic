<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="home-page-full-width home-page-cover">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				<a class="button" href="<?php echo home_url(); ?>/contact">Let's get to work!</a>
				<h4 class="homepage-hero">Learn More</h4>
				<img src="http://localhost:8888/thedigitalacademic/wp-content/themes/accelerate-theme-child/img/gif-bounce-arrow-small.gif" alt="scroll arrow" />
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section>
<div class="clearfix"></div>
<section class="what-we-do">
	<div class="site-content">
		<h4>Why you need a website</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin cursus, quam eu bibendum posuere, ex neque vehicula est, ac mattis mi velit eu erat. Quisque non ligula sit amet justo pretium iaculis. Fusce auctor est sed est ultrices, sit amet euismod leo auctor. Curabitur fermentum hendrerit turpis sed mollis. Donec faucibus ac magna non blandit. Suspendisse commodo commodo libero, non ultricies ex vehicula non. Nunc sit amet sollicitudin libero. Cras consequat mi sit amet ipsum molestie dictum.

Pellentesque dolor justo, fringilla et metus quis, accumsan aliquet libero. Phasellus non leo dignissim, vestibulum justo sit amet, eleifend mi. Donec ut enim.

</p>
	</div>
</section>
<div class="clearfix"></div>
<section class="home-page-full-width services">
	<div class="site-content">
		<h2>Our Services</h2>
	<div class="icon-float"	>
	<div class="services-icon">
		<a href="http://ruby314722.wpengine.com/about/"><img src="http://localhost:8888/thedigitalacademic/wp-content/themes/accelerate-theme-child/img/circle.gif" alt="circle" /></a>
		<p><a href="http://ruby314722.wpengine.com/about/">Content Strategy</a></p>
	</div>
	<div class="services-icon">
		<a href="http://ruby314722.wpengine.com/about/"><img src="http://localhost:8888/thedigitalacademic/wp-content/themes/accelerate-theme-child/img/circle.gif" alt="circle" /></a>
		<p><a href="http://ruby314722.wpengine.com/about/">Influencer Mapping</a></p>
	</div>
</div>
<div class="icon-float"	>
	<div class="services-icon">
		<a href="http://ruby314722.wpengine.com/about/"><img src="http://localhost:8888/thedigitalacademic/wp-content/themes/accelerate-theme-child/img/circle.gif" alt="circle" /></a>
		<p><a href="http://ruby314722.wpengine.com/about/">Social Media Strategy</a></p>
	</div>
	<div class="services-icon">
		<a href="http://ruby314722.wpengine.com/about/"><img src="http://localhost:8888/thedigitalacademic/wp-content/themes/accelerate-theme-child/img/circle.gif" alt="circle" /></a>
		<p><a href="http://ruby314722.wpengine.com/about/">Design &amp; Development</a></p>
	</div>
</div>
</div>
</section>
<!--
<section class="featured-work">
	<div class="site-content">
		<h4>Featured Work</h4>

		<ul class="homepage-featured-work">
		<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
			<?php while ( have_posts() ) : the_post();
				$image_1 = get_field("image_1");
				$size = "medium";
			?>

			<li class="individual-featured-work">
				<figure>
					<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image_1, $size); ?></a>
				</figure>

				<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
		 	</li>
				<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</ul>

	</div> -->
</section>
<section class="recent-posts">
	<div class="site-content">
		<div class="blog-post">
		      <h4>From the Blog</h4>
					<?php query_posts('posts_per_page=1'); ?>
					<?php while ( have_posts() ) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
		       <?php the_excerpt(); ?>
		       <a class="read-more-link" href="<?php the_permalink(); ?>">Read More <span>&rsaquo;</span></a>
	  				<?php endwhile; ?>
					<?php wp_reset_query(); ?>
		    </div>
	</div>
</section>


<section class="recent-posts">
	<div class="site-content">
		<div class="blog-post">

					<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
					<div id="secondary" class="widget-area" role="complementary">
						<?php dynamic_sidebar( 'sidebar-2' ); ?>
						<a class="read-more-link" href="http://twitter.com/brigid_barett">Follow Us <span>&rsaquo;</span></a>
		</div>
	</div>
</div>
</section>


<div class="clearfix"></div>
<?php endif; ?>
<!-- .home-page -->

<?php get_footer(); ?>

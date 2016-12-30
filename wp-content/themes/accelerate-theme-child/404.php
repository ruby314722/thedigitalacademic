<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.1
 */

get_header(); ?>
<section class="about-page">
	<div class="site-content">
			<div class="hero">
				<?php the_content(); ?>
				<h1><span>Uh oh!</span> Looks like you took a wrong turn </h1>

			<?php get_search_form(); ?>
			</div>
	</div><!-- .container -->
</section>

<section class="recent-posts">
	<div class="site-content">
		<div class="blog-post">

					<?php query_posts('posts_per_page=1'); ?>
					<?php while ( have_posts() ) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
		       <?php the_excerpt(); ?>
		       <a class="read-more-link" href="<?php the_permalink(); ?>">Read More <span>&rsaquo;</span></a>
	  				<?php endwhile; ?>
					<?php wp_reset_query(); ?>
		</div>
		<div class="blog-post">

					<?php query_posts('posts_per_page=1&offset=1'); ?>
					<?php while ( have_posts() ) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
		       <?php the_excerpt(); ?>
		       <a class="read-more-link" href="<?php the_permalink(); ?>">Read More <span>&rsaquo;</span></a>
	  				<?php endwhile; ?>
					<?php wp_reset_query(); ?>
		</div>
	</div>
</section>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->
<div class="clearfix"></div>
<?php get_footer(); ?>

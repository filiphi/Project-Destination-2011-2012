<?php
/**
* The Template for displaying all single posts.
	*
* @package WordPress
	* @subpackage Twenty_Eleven
* @since Twenty Eleven 1.0
	*/

get_header(); ?>
<div id="wrapper">
	<div id="sidebar">
		<div class="mainsponsor">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Main Sponsor') ) : ?>

			<?php endif; ?>			
		</div>
		<div class="clearboth"></div>
		<div class="menu">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Navigation') ) : ?>

			<?php endif; ?>
		</div>	
	</div>
	<div id="content">
		<div class="information">

			<?php// if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('About') ) : ?>

			<?php// endif; ?>

		</div>
		<div id="posts">

			<?php while ( have_posts() ) : the_post(); ?>
				<li id="post-<?php the_ID(); ?>">
					<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					<p class="post_meta">postad: <?php the_date('Y-m-d'); ?> klockan: <?php the_time('G:i'); ?>, av	<?php the_author();?>.</p>
					<p class="post_abstract"><?php the_excerpt(); ?></p>
					<hr/>
				</li>
				<nav id="nav-single">
					<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h3>
					<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'twentyeleven' ) ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></span>
				</nav><!-- #nav-single -->

				<?php get_template_part( 'content', 'single' ); ?>

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<div class="clearboth"> </div>
</div>

<?php get_footer(); ?>
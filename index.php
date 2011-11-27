<?php
date_default_timezone_set("Europe/Stockholm");
?>
<?php get_header(); ?>

<?php the_post(); ?>
<div id="content">
	<div class="wrapper960">
	<?php if(has_post_thumbnail()){ ?>

	<div class="wrapper960" id="selected_post_image">
		<?php the_post_thumbnail();?>
	</div>
	<?php }; ?>

		<div class="slider-wrapper theme-default">
			<div class="ribbon"></div>
			<div id="slider" class="nivoSlider">
				<img src="<?php bloginfo('template_url');?>/images/toystory.jpg" alt="" />
				<a href="http://dev7studios.com"><img src="<?php bloginfo('template_url');?>/images/up.jpg" alt="" title="This is an example of a caption" /></a>
				<img src="<?php bloginfo('template_url');?>/images/walle.jpg" alt="" data-transition="slideInLeft" />
				<img src="<?php bloginfo('template_url');?>/images/nemo.jpg" alt="" title="#htmlcaption" />
			</div>
			<div id="htmlcaption" class="nivo-html-caption">
				<strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
			</div>
		</div>


		<div class="boxes"> 
			<div class="left">
				<div id="posts">
					<ul id="innerPosts">
						<?php query_posts(array('posts_per_page'=>4, 'category_ID'=>$_GET["cat"],'paged' => get_query_var('page'))); ?>

						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

							<li id="post-<?php the_ID(); ?>">
								<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
								<p class="post_meta">postad: <?php the_date('Y-m-d'); ?> klockan: <?php the_time('G:i'); ?>, av	<?php the_author();?>.</p>
								<p class="post_abstract"><?php the_excerpt(); ?></p>
								<hr/>
							</li>

						<?php endwhile; endif;?>
					</ul>
				</div>
				<ul id="newsaggregator">
					<?php //wp_pagenavi(); ?>
				</ul>
				<?php wp_reset_query();?>
			</div>
			<div class="right">
			</div>
			asdf
		</div>
	<div class="clearboth"></div>
</div>
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
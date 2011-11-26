<?php
date_default_timezone_set("Europe/Stockholm");
?>
<?php get_header(); ?>
<?php the_post(); ?>
<?php if(has_post_thumbnail()){ ?>
	<div class="wrapper960" id="selected_post_image">
		<?php the_post_thumbnail();?>
	</div>
	<?php } ?>

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

				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('About') ) : ?>

				<?php endif; ?>

			</div>


			<div id="posts">
				<ul id="innerPosts">
					<?php query_posts(array('posts_per_page'=>4, 'category_ID'=>$_GET["cat"],'paged' => get_query_var('page'))); ?>
					<?php $cat = get_the_category();
					$name = $cat[0]->cat_name; ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php if (in_category($_GET["cat"])) { ?>
							<li id="post-<?php the_ID(); ?>">
								<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
								<p class="post_meta">postad: <?php the_date('Y-m-d'); ?> klockan: <?php the_time('G:i'); ?>, av	<?php the_author();?>.</p>
								<p class="post_abstract"><?php the_excerpt(); ?></p>
								<hr/>
							</li>
							<?php }; ?>
						<?php endwhile; else: ?>
							<?php if ($_GET["cat"]==4): ?>
								<p><?php _e('No news have been posted yet.'); ?></p>
							<?php elseif ($_GET["cat"]==5): ?>
								<p><?php _e('No events have been posted yet.'); ?></p>
							<?php else: ?>
								<p><?php _e('Nothing has been posted yet.'); ?></p>
							<?php endif; ?>
						<?php endif; ?>
					</ul>
				</div>
				<ul id="newsaggregator">
					<?php wp_pagenavi(); ?>
				</ul>
				<?php wp_reset_query();?>
				<?php
				$page = '';
				if (is_home())
					$page = 1;
				elseif (strcmp($name, "News")==0)
					$page = 2;
				elseif (strcmp($name, "Events")==0)
					$page = 3;
				elseif ($name == 2)
					$page = 4;
				elseif ($name == 21)
					$page = 5;	
			?>
			<div id="home" style="display:none"><?php _e($page)?></div>
			</div>


		<div class="clearboth"></div>
	</div>
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
<?php
/*
Template Name: page-start.php
*/
date_default_timezone_set("Europe/Stockholm");
?>
<?php get_header(); ?>
<?php the_post(); ?>
<div class="wrapper960" id="featured">
		<?php if(has_post_thumbnail()){ ?>
			<?php the_post_thumbnail('',array('class'=>'left'));?>
		<?php } ?> 
		<div class="left infobox">
			Infobox
		</div>
		<div class="clearboth"></div>
</div>
<div id="content">
	<div class="left start_left_col">
		<h2>Nyheter</h2>
		<hr/>
		<div id="posts">
			<ul id="innerPosts">
				<?php //$the_query = new WP_Query(array('category_name'=>'nyheter', 'posts_per_page'=>4));
				query_posts(array('posts_per_page'=>4, 'category_name'=>'nyheter','paged' => get_query_var('page')));
				?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li id="post-<?php the_ID(); ?>">
					<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					<p class="post_meta">postad: <?php the_date('Y-m-d'); ?> klockan: <?php the_time('G:i'); ?>, av	<?php the_author();?>.</p>
					<p class="post_abstract"><?php the_excerpt(); ?></p>
					<hr/>
				</li>
				<?php endwhile; else: ?>
					<p><?php _e('Inga Nyheter har blivit postade ännu.'); ?></p>
				<?php endif; ?>
			</ul>
		</div>
		/*<ul id="newsaggregator">
			<?php wp_pagenavi(); ?>
		</ul>*/
		<?php wp_reset_query();?>
	</div>
	/*<div class="right start_right_col">
		<iframe width="460" height="259" src="http://www.youtube.com/embed/PXRX47L_3yE" frameborder="0" allowfullscreen></iframe>
		<div>
			<h2>Utställande företag</h2>
			<ul id="exhibitor_flow">
			<?php
			$args = array( 'post_type' => 'attachment', 'post_mime_type'=>'image','numberposts' => -1, 'post_status' => null, 'post_parent' => get_the_ID()); 
			$attachments = get_posts($args);
			if ($attachments) {
				foreach ( $attachments as $attachment ) {
					
						$image_attributes = wp_get_attachment_image_src( $attachment->ID, 'full'); // returns an array?>
						<li><img src="<?php echo $image_attributes[0]; ?>"/></li>
					<?php
					
					//echo apply_filters( 'the_title' , $attachment->post_title );
					//the_attachment_link( $attachment->ID , false );
				}
			}
			
			?>
			</ul>
		</div>
	</div>*/
	
	<div class="clearboth"></div>
</div>

<?php get_footer(); ?>
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
	<div clas="wrapper960">
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
			<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
				HEHEHEHE
				<?php ($name = get_the_ID()); ?>
				<div class="pagetitle">
				<h2><?php the_title(); ?></h2>
				</div>
				<div class="pagecontent">
				<div class="left post_content"><?php echo the_content();?></div>
				<div class="right" id="post_images">
					<?php
				$args = array( 'post_type' => 'attachment', 'post_mime_type'=>'image','numberposts' => -1, 'post_status' => null, 'post_parent' => get_the_ID()); 
				$attachments = get_posts($args);
				if ($attachments) {
					foreach ( $attachments as $attachment ) {

						$image_attributes = wp_get_attachment_image_src( $attachment->ID, 'full'); // returns an array?>
						<img src="<?php echo $image_attributes[0]; ?>"/>
						<?php

						//echo apply_filters( 'the_title' , $attachment->post_title );
						//the_attachment_link( $attachment->ID , false );
					}
				}

				?>
				</div>
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
			<div class="clearboth"></div>
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
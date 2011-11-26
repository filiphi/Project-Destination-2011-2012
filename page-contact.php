<?php
/*
Template Name: page-contact.php
*/
date_default_timezone_set("Europe/Stockholm");
?>
<?php get_header(); ?>
<?php the_post(); ?>

<div class="wrapper960" id="selected_post_image">
		<iframe width="960" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Drottning+Kristinas+V%C3%A4g+15,+Stockholm,+Sweden&amp;aq=1&amp;sll=57.734506,11.909759&amp;sspn=0.015556,0.045362&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Drottning+Kristinas+V%C3%A4g+15,+114+28+Stockholm,+Stockholms+L%C3%A4n,+Sweden&amp;ll=59.347065,18.071302&amp;spn=0.014857,0.045362&amp;t=m&amp;z=14&amp;output=embed"></iframe><br /><!--<small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Drottning+Kristinas+V%C3%A4g+15,+Stockholm,+Sweden&amp;aq=1&amp;sll=57.734506,11.909759&amp;sspn=0.015556,0.045362&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Drottning+Kristinas+V%C3%A4g+15,+114+28+Stockholm,+Stockholms+L%C3%A4n,+Sweden&amp;ll=59.347065,18.071302&amp;spn=0.014857,0.045362&amp;t=m&amp;z=14" style="color:#0000FF;text-align:left">View Larger Map</a></small>-->
</div>
<div id="content">
	<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
		<h2><?php the_title(); ?></h2>
		<div class="left post_content"><?php echo the_content();?></div>
		<div class="right start_right_col">
			<h3>Besöksadress</h3>
			<p>Kårhuset Nymble, plan 2<br />
			Drottning Kristinas väg 15-19</p>
			<h3>Postadress / Fakturaadress</h3>
			<p>THS Näringsliv<br />
			100 44 Stockholm</p>
			<h3>Leveransadress</h3>
			<p>THS Näringsliv<br />
			Drottning Kristinas väg 15-19<br />
			114 28 Stockholm</p>
			<h3>Org nr</h3>
			<p>802005-9153</p>
		</div>
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
		<div class="clearboth"></div>
	</div>
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>

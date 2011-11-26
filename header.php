<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/reset.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<script src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
// Load jQuery
google.load("jquery", "1");
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script src="http://gsgd.co.uk/sandbox/jquery/easing/jquery.easing.1.3.js"></script>
<script src="<?php bloginfo('template_url');?>/js/GGS.js"></script>
<!--<script src="<?php bloginfo('template_url');?>/js/script.js"></script> -->
<script src="<?php bloginfo('template_url');?>/js/destination.js"></script>
<?php
	wp_head();
?>
</head>
<body>

<div id="header">
	<div class="wrapper960">
	<div class="headerinfo">
		<img class="left logo" src="<?php bloginfo('template_url');?>/images/project_logga.png"/>
		<div class="rightheader">
			<p class="headLogo"> Project Destination </p>
			<p class="headerQuestion">Is the World your new Office?</p>		
		</div>
	</div>
	</div>
	<div style="clear:both"></div>

</div>

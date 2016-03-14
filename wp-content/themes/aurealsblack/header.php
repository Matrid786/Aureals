<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Aureals Black
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
		<script type="text/javascript">
			jQuery(document).ready(function($){    
				$('.slideNext').click(function() {
				   $('.slideBox').animate({
				     top: '-=1000px'				   
				 	}, 400);
				});
				$('.slideBack').click(function() {
				   $('.slideBox').animate({
				     top: '+=1000px'				   
				 	}, 400);
				});
			});
		</script>
</head>

<body <?php body_class(); ?>>

	<div class="header-area full">
		<div class="main-page">
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'aurealsblack' ); ?></a>

			<header id="masthead" class="site-header inner" role="banner">
				<div class="site-branding-left">
					<a href="http://www.iconcapitalsa.com" ><div id="logo"><img src="<?php bloginfo('template_url');?>/images/logo.jpg"></div></a>
				</div>

				<div class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h1><span class="gold"><b>Icon</b></span> Aureals<small><sup>&#0153;</sup></small></h1></a>
				</div>

				<div class="site-branding-right">
					<img src="<?php bloginfo('template_url');?>/images/coins.png">
				</div>
			</header><!-- #masthead -->

		</div><!-- .main-page -->
	</div><!-- .header-area -->

	<div class="main-content-area full">
		<div class="main-page">
			<div id="content" class="site-content inner">

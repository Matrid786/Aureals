<?php
/*
Template Name: Home
*/

get_header(); ?>

	<div id="primary" class="content-area full">
		<main id="main" class="site-main" role="main">

		<div class="home-wrap">

			<h1><?php the_field('acf-title'); ?></h1>

				<div class="home-content">

					<div id="slideBox1" class="slideBox">
					<h2><?php the_field('acf-subhead'); ?></h2>

					<div class="home-content-left">
						<?php the_field('acf-content'); ?>
					</div>

					<div class="home-content-right">
							<a href="#" class="slideNext button reserve no-mob">Reserve your AUREALS<small><sup>™</sup></small> Now!</a>
							<a href="#" class="slideNext button reserve mob">Reserve Now!</a>
					</div>
					</div><!-- slideBox1 -->


					<div id="slideBox2" class="slideBox">

						<div id="terms"><?php the_field('acf-terms'); ?></div>
							<div class="button-group">
								<a id="register" href="#" class="slideNext button accept">I Accept</a>
								<a href="#" class="slideBack button accept">Go Back</a>
							</div>
					</div><!-- slideBox2 -->	


					<div id="slideBox3" class="slideBox">
						<div id="clip">
							<h2><?php the_field('acf-content_area'); ?></h2>
							<ul class="footer">
								<li><img class="logo" src="<?php bloginfo('template_url');?>/images/logo-coinprism.png"></li>
								<li><a href="http://coinprism.com/signup" target="_blank">www.coinprism.com/signup</a></li>
							</ul>
						</div>
					</div><!-- slideBox3 -->


				</div><!-- home-content -->

				<div class="home-sub-content">
					<p class="attribute">powered by ICON CAPITAL RESERVE SA</p>		
				</div>

		</div><!-- home-wrap -->	

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>


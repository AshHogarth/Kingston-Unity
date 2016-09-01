<!DOCTYPE html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
<meta charset="utf-8">
<?php // Google Chrome Frame for IE ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title><?php wp_title(''); ?></title>
<?php // mobile meta (hooray!) ?>
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7" />
<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/fontawesome/4.5.0/css/font-awesome.min.css">
<!--[if IE]>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<![endif]-->
<?php // or, set /favicon.ico for IE10 win ?>
<meta name="msapplication-TileColor" content="#f01d4f">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php wp_head(); // wordpress head functions ?>
<?php // drop Google Analytics Here ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76953035-1', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body <?php body_class(); ?>>
<div id="wptime-plugin-preloader"></div>
	<header>
<!-- headerxtract1 -->
		<div class="container">
			<a href="<?php echo home_url(); ?>" id="logo" rel="nofollow">
				<img src="http://ku.wp.web.ai-staging.com/wp-content/uploads/2016/03/logo-2.png" alt="Kingston Unity"/>
			</a>
			<div id="head-right">
				<ul>
					<li>
						<a href="https://www.facebook.com/Kingston-Unity-Friendly-Society-KUFS-173100149407743/" class="fa fa-facebook" target="_blank"></a>
					</li>
					<li>
						<a href="https://twitter.com/KingstonUnity" class="fa fa-twitter" target="_blank"></a>
					</li>
					<li id="login">
						<a href="/wp-content/themes/kingston/library/js/libs/sign-in-or-sign-up.html" class="fa fa-sign-in">
							<span>IFA Log in</span>
						</a>
					</li>
				</ul>
				<p>
					<span>Contact us today on:</span> 01924 240164 | <a href="mailto:enquiries@kingstonunity.co.uk">enquiries@kingstonunity.co.uk</a>
				</p>
				<!-- /head-right -->
			</div>
			<div id="nav-icon">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<nav>
				<?php wp_nav_menu(array(
					'container' => false,							// remove nav container
					'container_class' => 'menu cf',					// class of container (should you choose to use it)
					'menu' => __( 'The Main Menu', '' ),			// nav name
					'menu_class' => '',								// adding custom nav class
					'theme_location' => 'main-nav',					// where it's located in the theme
					'before' => '',									// before the menu
					'after' => '',									// after the menu
					'link_before' => '',							// before each link
					'link_after' => '',								// after each link
					'depth' => 0,									// limit the depth of the nav
					'fallback_cb' => ''								// fallback function (if there is one)
				)); ?>
                        
			</nav>
                        <!-- headerxtract2 -->
			<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
				<?php if(function_exists('bcn_display'))
				{
					bcn_display();
				}?>
			</div>
			<!-- /container -->
		</div>
	</header>

	<?php if( has_post_thumbnail() ) { ?>

	<?php } else { ?>
		<?php if(is_front_page() ) { ?>
			<div class="banner-container">
				<ul class="banner-cycle">
					<?php
						// The Query
						query_posts( $query_string . "post_type=banner&posts_per_page=-1" );

						// The Loop
						while ( have_posts() ) : the_post();
					?>
					<?php if (has_post_thumbnail( $post->ID ) ): ?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						<li style="background-image: url('<?php echo $image[0]; ?>')">
							<div class="container wow fadeInLeft" data-wow-delay="1s">
								<h2><?php the_field('image_title'); ?></h2>
								<p><?php the_field('image_text'); ?></p>
							</div>
						</li><!-- end #category-name -->
					<?php endif; ?>
					<?php
						endwhile;
						// Reset Query
						wp_reset_query();
					?>
				</ul>
				<!-- /banner-container -->
			</div>
		<?php } ?>
	<?php } ?>
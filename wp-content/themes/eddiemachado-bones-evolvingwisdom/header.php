<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

		<!-- provide variable urls to javascripts -->
		  <script type="text/javascript">
		   var urlSite = "<?php bloginfo('url'); ?>";
		   var urlTemp = "<?php bloginfo('template_url'); ?>";
		   var homeUrl = "<?php get_home_url(); ?>";
		  </script>
  
	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
		<div id="wrap">
			<header id="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
				<a href="<?php echo home_url(); ?>" rel="nofollow">
					<img id="logoEW" src="<?php bloginfo('template_url'); ?>/library/images/header-logo.png" itemscope itemtype="http://schema.org/Organization">
					
					<img id="subtitleEW" src="<?php bloginfo('template_url'); ?>/library/images/header-subtitle.png">
				</a>

				<nav id="navEWMain" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
					<img id="expandNavMain" src="<?php bloginfo('template_url'); ?>/library/images/nav_ew_main_mobile_icon.png" alt="Show/Hide Menu">
					
					<?php wp_nav_menu( array( 'theme_location' => 'ew-main' ) ); ?>

					<div id="programsNavBox">
						<div class="programBox">
							<a href="<?php bloginfo('url'); ?>/programs/integral-and-evolutionary-spirituality">
								<img src="<?php bloginfo('template_url'); ?>/library/images/content-category-small-1.jpg" alt="Integral &amp; Evolutionary Spirituality">

								<h2>Integral &amp; Evolutionary Spirituality</h2>
							</a>
								
							<a class="learnMore" href="<?php bloginfo('url'); ?>/programs/integral-and-evolutionary-spirituality">&gt; Learn More</a>
						</div> <!-- end .programBox -->

						<div class="programBox">
							<a href="<?php bloginfo('url'); ?>/programs/womens-spirituality-and-empowerment">					
								<img src="<?php bloginfo('template_url'); ?>/library/images/content-category-small-2.jpg" alt="Women's Spirituality &amp; Empowerment">

								<h2>Women's Spirituality &amp; Empowerment</h2>
							</a>

							<a class="learnMore" href="<?php bloginfo('url'); ?>/programs/womens-spirituality-and-empowerment">&gt; Learn More</a>
						</div> <!-- end .programBox -->

						<div class="programBox">
							<a href="<?php bloginfo('url'); ?>/programs/life-purpose">
								<img src="<?php bloginfo('template_url'); ?>/library/images/content-category-small-3.jpg" alt="Life Purpose">

								<h2>Life Purpose</h2>
							</a>

							<a class="learnMore" href="<?php bloginfo('url'); ?>/programs/life-purpose">&gt; Learn More</a>
						</div> <!-- end .programBox -->

						<div class="programBox">
							<a href="<?php bloginfo('url'); ?>/programs/love-and-relationships">
								<img src="<?php bloginfo('template_url'); ?>/library/images/content-category-small-4.jpg" alt="Love &amp; Relationships">

								<h2>Love &amp; Relationships</h2>
							</a>

							<a class="learnMore" href="<?php bloginfo('url'); ?>/programs/love-and-relationships">&gt; Learn More</a>
						</div> <!-- end .programBox -->

						<div class="programBox">
							<a href="<?php bloginfo('url'); ?>/programs/personal-and-spiritual-transformation">
								<img src="<?php bloginfo('template_url'); ?>/library/images/content-category-small-5.jpg" alt="Personal &amp; Spiritual Transformation">

								<h2>Personal &amp; Spiritual Transformation</h2>
							</a>

							<a class="learnMore" href="<?php bloginfo('url'); ?>/programs/personal-and-spiritual-transformation">&gt; Learn More</a>
						</div> <!-- end .programBox -->

						<div class="programBox">
							<a href="<?php bloginfo('url'); ?>/programs/evolving-faith-traditions">
								<img src="<?php bloginfo('template_url'); ?>/library/images/content-category-small-6.jpg" alt="Evolving Faith Traditions">

								<h2>Evolving Faith Traditions</h2>
							</a>

							<a class="learnMore" href="<?php bloginfo('url'); ?>/programs/evolving-faith-traditions">&gt; Learn More</a>
						</div> <!-- end .programBox -->
					</div> <!-- end #programsNavBox -->
				</nav> <!-- end #navEWMain -->
			</header> <!-- end #header -->

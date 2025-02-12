<!doctype html>
<html lang="en">
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-CODE');</script>
	<!-- End Google Tag Manager -->
	<title><?php echo get_the_title(); ?></title>
    <meta charset="utf-8">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics  GA4-->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-CODE"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-LBD89RYF40');
	</script>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>

<body <?= body_class();?>>	
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-CODE"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<header>
		<div class="container">
			<nav class="main-nav">
				<?php wp_nav_menu('Primary Menu'); ?>
			</nav>
			<nav style="display:none;">
				<?php
					//wp_nav_menu( array(
					//	'theme_location' => 'social-nav',
					//	'container' => 'social-nav',
					//));
				?>
			</nav>
		</div>
	</header>
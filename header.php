<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-WHDSS39');</script>
	<!-- End Google Tag Manager -->
	<title>【事務×GYM】 | 事務職を目指す方・事務スキル向上を目指す方のための学習サイト</title>
	<meta name="description" content="事務職を目指す方・事務のスキルアップを目指す方のための学習サイト"/>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/6ef63a1df5.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WHDSS39"	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	
	<header>
		<div class="site-title">
			<a class="site-title__link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">	
				<h1 class="service-name">事務×GYM</h1>
			</a>
		</div>
		<button type="button" class="hamburger-btn">
			<span></span>
			<span></span>
			<span></span>
		</button>
		<nav id="header-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'header_menu' )); ?>
		</nav>
	</header>

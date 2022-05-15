<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<title>佐藤由基 声楽教室 | 小田急線柿生駅より徒歩10分の声楽教室</title>
	<meta name="description" content="佐藤由基 声楽教室は神奈川県川崎市麻生区の声楽教室です。小田急線 柿生駅より徒歩10分とアクセス良好。小さいお子さんから、音大受験を目指す学生さん、趣味で取り組みたい社会人まで幅広いレッスンが可能です。"/>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/6ef63a1df5.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<div class="site-title">
			<a class="site-title__link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">	
				<h1 class="service-name">佐藤 由基 声楽教室</h1>
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

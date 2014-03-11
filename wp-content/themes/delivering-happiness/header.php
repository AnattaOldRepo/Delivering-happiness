<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Delivering Happiness
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
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<?php do_action( 'before' ); ?>
	
	<!-- Header -->
	<header class="global-header sticky">
		<div class="wrapper">
			<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"></a></h1>
			<menu class="site-navigation">
				<li class="nav-work <?php if(is_page('work')) { ?>active <?php } ?>">
					<a href="/work">WORK</a>
					<div class="message">Coaching and speaking to Make Happy Work™.</div>
				</li>
				<li class="nav-shop <?php if(is_page('shop')) { ?>active <?php } ?>">
					<a href="/shop">SHOP</a>
					<div class="message">Goods and gear to inspire, connect and educate.</div>
				</li>
				<li class="nav-community <?php if(is_page('community')) { ?>active <?php } ?>">
					<a href="/community">COMMUNITY</a>
					<div class="message">Discover the movement, join our community.</div>
				</li>
				<li class="nav-happiness <?php if(is_page('happiness')) { ?>active <?php } ?>">
					<a href="/happiness">HAPPINESS 101</a>
					<div class="message">How you can make the world a happier place.</div>
				</li>
			</menu>
		</div>
	</header>
	<!-- Header -->
	<div id="content">


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
<meta name="viewport" content="width=device-width, initial-scale=0">
<title><?php wp_title( '|', true, 'left' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="mobile-nav-menu">
		<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"></a></h1>
<div class="mob-nav">
		<ul>
				<li  <?php if(is_page('services')) { ?>active <?php } ?>>
					<a class="mob-nav-work" href="<?php echo home_url(); ?>/services">SERVICES</a>
					<div class="message">Coaching and speaking to Make Happy Work™.</div>
				</li>
				<li  <?php if(is_page('shop')) { ?>active <?php } ?>>
					<a class="mob-nav-shop" href="<?php echo home_url(); ?>/shop">SHOP</a>
					<div class="message">Goods and gear to inspire, connect and educate.</div>
				</li>
				<li  <?php if(is_page('community')) { ?>active <?php } ?>>
					<a class="mob-nav-community" href="<?php echo home_url(); ?>/community">COMMUNITY</a>
					<div class="message">Discover the movement, join our community.</div>
				</li>
				<li  <?php if(is_home('happiness')) { ?>active <?php } ?>>
					<a class="mob-nav-happiness" href="<?php echo home_url(); ?>/blog">HAPPINESS 101</a>
					<div class="message">How you can make the world a happier place.</div>
				</li>
			</ul>
		</div>
	</div>
<div id="page" class="hfeed site">

	<?php do_action( 'before' ); ?>
	
	<!-- Header -->
	<header class="global-header sticky">
		<div class="wrapper">
			<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"></a></h1>
			<a class="hero-icon mobile-toggle" href="#"></a>
			<menu class="site-navigation mob-nav">
				<li class="nav-work <?php if(is_page('services')) { ?>active <?php } ?>">
					<a href="<?php echo home_url(); ?>/services">SERVICES</a>
					<div class="message">Coaching and speaking to Make Happy Work™.</div>
				</li>
				<li class="nav-shop <?php if(is_page('shop')) { ?>active <?php } ?>">
					<a href="<?php echo home_url(); ?>/shop">SHOP</a>
					<div class="message">Goods and gear to inspire, connect and educate.</div>
				</li>
				<li class="nav-community <?php if(is_page('community')) { ?>active <?php } ?>">
					<a href="<?php echo home_url(); ?>/community">COMMUNITY</a>
					<div class="message">Discover the movement, join our community.</div>
				</li>
				<li class="nav-happiness <?php if(is_home('happiness')) { ?>active <?php } ?>">
					<a href="<?php echo home_url(); ?>/blog">HAPPINESS 101</a>
					<div class="message">How you can make the world a happier place.</div>
				</li>
			</menu>
			<div class="searchfrm">
				<form role="search" method="get" class="search-form" action="<?php echo home_url();?>">
					<label>
						<input type="search" class="search-field" placeholder="Search our site..." value="" name="s" />
					</label>
					<input type="submit" value="Search" class="search-submit">
				</form>
			</div>
		</div>

	</header>
	<!-- Header -->
	<div id="content">

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
	<header class="global-header">
		<div class="wrapper">
			<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"></a></h1>
			<menu class="site-navigation">
				<li class="nav-work"><a href="/work">WORK</a></li>
				<li class="nav-shop"><a href="/shop">SHOP</a></li>
				<li class="nav-community"><a href="/community">COMMUNITY</a></li>
				<li class="nav-happiness"><a href="/happiness">HAPPINESS 101</a></li>
			</menu>
		</div>
	</header>
	<!-- Header -->


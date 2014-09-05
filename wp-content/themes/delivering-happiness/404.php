<?php
/**
* The template for displaying 404 pages (Not Found).
*
* @package Delivering Happiness
*/
get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	
		<section class="error-404 not-found">
			<div class="wrapper">
				<div class="two-column hero">
					<div class="left-col">
						<img src="<?php bloginfo('template_url') ?>/assets/images/winkey-img.png" alt="404 error" />
					</div>
					<div class="right-col">
						<div class="page-content">
							<h1 class="page-title"><?php _e( 'Whoops' ); ?></h1>
							<?php _e( '', 'delivering-happiness' ); ?>
							<p>We don't think this is the happiness you were looking for, unless big white spaces make you happy? If so... well, sorry for cluttering this one all up!</p>
							<p>If you're looking for some other kind of happiness:</p>
							<h3 class="go-home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">GO BACK HOME</a></h3>
							or
							<?php get_search_form(); ?>
						</div><!-- .page-content -->
					</div>
				</div>
			</div>
		</section><!-- .error-404 -->
				
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
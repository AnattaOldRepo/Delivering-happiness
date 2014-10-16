<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Delivering Happiness
 */
?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php _e( 'SORRY, NOTHING FOUND', 'delivering-happiness' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'delivering-happiness' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Hmm, we couldn\'t find anything that matched your search terms. Would you like to <br/>try again with a different keyword?', 'delivering-happiness' ); ?></p>
			<div class="searchfrm">
				<form role="search" method="get" class="search-form" action="<?php echo home_url();?>">
					<label>
						<input type="search" class="search-field" placeholder="Search our site..." value="" name="s" />
					</label>
					<input type="submit" value="Search" class="search-submit">
				</form>
			</div>
			<p><?php _e( 'Or, feel free to <a href="mailto:chat@deliveringhappiness.com">email us</a> and we\'ll try to help you find what you are looking for!', 'delivering-happiness' ); ?></p>
			
		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'delivering-happiness' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->

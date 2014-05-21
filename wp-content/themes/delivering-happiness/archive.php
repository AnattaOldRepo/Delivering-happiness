<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Delivering Happiness
 */

get_header(); ?>

<div class="happiness-page">
	<div class="wrapper">
		<div class="page-header">
			<h1><a href="<?php echo delivering_happiness_blog_link(); ?>">Blog</a> > <?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							printf( __( 'Author: %s', 'delivering-happiness' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'delivering-happiness' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'delivering-happiness' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'delivering-happiness' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'delivering-happiness' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'delivering-happiness' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'delivering-happiness' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries', 'delivering-happiness');

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'delivering-happiness');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'delivering-happiness' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'delivering-happiness' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'delivering-happiness' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Statuses', 'delivering-happiness' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audios', 'delivering-happiness' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Chats', 'delivering-happiness' );

						else :
							_e( 'Archives', 'delivering-happiness' );

						endif;
					?> </h1>
		</div>
		<div id="primary" class="content-area left-col">
			<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php delivering_happiness_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>

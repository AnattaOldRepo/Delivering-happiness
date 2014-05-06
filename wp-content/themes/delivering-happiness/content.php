<?php
/**
 * @package Delivering Happiness
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<div class="media">
			<?php if ( has_post_thumbnail() ) { ?>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id() ); ?>
				<img src="<?php echo $image[0]; ?>" alt="featured-thumbnail" />
			<?php } else if ( function_exists( 'get_the_image_by_scan' ) ) { ?>
				<?php $image = get_the_image_by_scan( array( 'post_id' => get_the_ID() ) ); ?>
				<img src="<?php echo $image['src']; ?>" alt="featured-thumbnail" />
			<?php } ?>
		</div>
		<div class="content">
			<header class="entry-header">
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

				<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<?php the_category(', '); ?> | <?php delivering_happiness_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->
			<?php the_Excerpt(); ?>
			<a class="cta" href="<?php the_permalink() ?>">Read more</a>
		</div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'delivering-happiness' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta" style="display: none">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'delivering-happiness' ) );
				if ( $categories_list && delivering_happiness_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'delivering-happiness' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'delivering-happiness' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'delivering-happiness' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'delivering-happiness' ), __( '1 Comment', 'delivering-happiness' ), __( '% Comments', 'delivering-happiness' ) ); ?></span>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'delivering-happiness' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->

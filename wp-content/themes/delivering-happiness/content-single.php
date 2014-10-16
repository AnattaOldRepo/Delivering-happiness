<?php
/**
 * @package Delivering Happiness
 */
?>

<article id="post-<?php the_ID(); ?>" class="post detail">
	<header class="entry-header">
		<h2 class="entry-title"><?php the_title(); ?></h2>
		<!--Share This Code-->
		<div class="no-break">
			<span class='st_facebook_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
			<span st_username='dhmovement' class='st_twitter_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
			<span class='st_linkedin_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
			<p></p>
		</div>
		<div class="entry-meta">
			<?php the_category(', '); ?> | <?php delivering_happiness_posted_on(); ?> | <?php the_author_posts_link(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>

		<?php //displaying lead box code
			$include_lead_box = get_field('include_lead_box'); //getting radiobox value 
		  	$post_lead_box = get_field('post_lead_box'); //getting post lead box
		  	if( $include_lead_box == 'Yes' ) {
		  		echo "<div class='leadbox'>" . $post_lead_box . "</div>" ;
		  	}
		?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'delivering-happiness' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-meta" style="display:none;">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'delivering-happiness' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'delivering-happiness' ) );

			if ( ! delivering_happiness_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'delivering-happiness' );
				} else {
					$meta_text = __( 'Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'delivering-happiness' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'delivering-happiness' );
				} else {
					$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'delivering-happiness' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink()
			);
		?>

		<?php edit_post_link( __( 'Edit', 'delivering-happiness' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->

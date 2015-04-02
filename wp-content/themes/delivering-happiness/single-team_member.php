<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Delivering Happiness
 */

get_header(); ?>

<div class="one-column-template team-template">
	<div class="wrapper">
		<div class="page-header">
			<h1><?php the_title() ?></h1>
		</div>
		<div id="primary" class="page-content">
			<main id="main" class="site-main" role="main">
				<?php if ( have_posts() ) : 
				$headshot = get_field( 'full_color_headshot_image' );
				?>

					<?php while ( have_posts() ) : the_post(); ?>
						<p class="designation"><?php the_field( 'designation' ); ?><br/><?php the_field( 'role' ); ?></p>
						<div class="media">
							<img src="<?php $image = get_field( 'image' ); echo $image['url']; ?>" alt="<?php the_title(); ?>" />
							<?php if( !empty($headshot) ) { ?>
								<p class="designation"><a href="<?php echo $headshot['url']; ?>" target="_blank">Download Headshot</a></p>
							<?php } ?>
						</div>
						
						<div class="content">
							<?php the_field( 'facebook' ); ?>
							<?php the_field( 'twitter' ); ?>
							<?php the_content(); ?>
						</div>
						
					<?php endwhile; ?>

					<?php delivering_happiness_paging_nav(); ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>

<?php get_footer();
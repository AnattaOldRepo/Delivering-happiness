<?php
/*
Template Name: Speaking Page
*/
get_header();

?>

<!-- Work page-->
<div class="service-request">
    <section class="one-column hero">
		<div class="wrapper">
			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<h2><?php the_title(); ?></h2>

				<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>
		</div>
	</section>
	<div class="one-column-template">
		<div class="wrapper">
			<div class="page-header">
				<h1><?php the_title() ?></h1>
			</div>
			<div id="primary" class="page-content">
				<main id="main" class="site-main" role="main">

				<?php
				// check if the flexible content field has rows of data
				if( have_rows('module') ):

				 	// loop through the rows of data
				    while ( have_rows('module') ) : the_row();

						// check current row layout
				        if( get_row_layout() == 'add_content' ):
				        	echo "<div><h3>".get_sub_field('module_title')."</h3></div>";
				        	echo "<div>".get_sub_field('module_content')."</div>";
				        endif;

				        if( get_row_layout() == 'add_blockquote' ): 
				        	echo "<div><h3>Quote 1: </h3><blockquote>".get_sub_field('quote_1')."</blockquote></div>";
				        	echo "<div><h3>Quote 2: </h3><blockquote>".get_sub_field('quote_2')."</blockquote></div>";
				        endif;

				    endwhile;
				else :
				    // no layouts found
				endif;

				?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
	</div>

</div>
<!-- /Work page-->
<?php get_footer(); ?>
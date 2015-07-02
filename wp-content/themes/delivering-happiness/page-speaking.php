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
				if( get_field('module_1') ):

				 	// loop through the rows of data
				    while ( has_sub_field('module_1') ) :
						// check current row layout
				        if( get_row_layout() == 'module_1_content' ):
				        	$title = get_sub_field('title');
				        	$image = get_sub_field('image');
				        	$content = get_sub_field('content');

				        	echo "<div><h3>".$title."</h3></div>";

				        	echo "<img src='".$image['url']."' alt='' />";

				       		// check if the nested repeater field has rows of data
				        	if( have_rows('quick_links') ):

				        		echo '<h2>Quick Links</h2>';
							 	echo '<ul>';

							 	// loop through the rows of data
							    while ( have_rows('quick_links') ) : the_row();

									$linktitle = get_sub_field('link_title');
									$link = get_sub_field('link');

									echo '<li><a href="'.$link.'" target="_blank">'.$linktitle.'</a></li>';

								endwhile;

								echo '</ul>';

							endif;
				        	
				        	echo "<div>".$content."</div>";
				        endif;
				    endwhile;
				endif;

				// check if the flexible content field has rows of data
				if( get_field('module_2') ):

				 	// loop through the rows of data
				    while ( has_sub_field('module_2') ) :
				        // check current row layout
				        if( get_row_layout() == 'module_2_content' ):

				        	$rows =  get_sub_field('quote' ) ; // get all the rows
				        	if( $rows ):
								
								while(the_sub_field('quote' )):

									echo "<div>".$rows."</div>";
									
								endwhile; 
					
							endif; 
				        	
				        endif;
				    endwhile;
				endif;

				// check if the flexible content field has rows of data
				if( get_field('module_3') ):

				 	// loop through the rows of data
				    while ( has_sub_field('module_3') ) :
				        // check current row layout
				        if( get_row_layout() == 'module_3_content' ):
				        	$title = get_sub_field('title');
				        	$content = get_sub_field('content');
				        	echo "<div><h3>".$title."</h3></div>";
				        	echo "<div>".$content."</div>";
				        endif;
				    endwhile;
				endif;

				// check if the flexible content field has rows of data
				if( get_field('module_4') ):

				 	// loop through the rows of data
				    while ( has_sub_field('module_4') ) :
				        // check current row layout
				        if( get_row_layout() == 'module_4_content' ):
				        	$content = get_sub_field('content');
				        	echo "<div>".$content."</div>";
				        endif;
				    endwhile;
				endif;

				?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
	</div>

</div>
<!-- /Work page-->
<?php get_footer(); ?>
<?php
/*
Template Name: Inspire Speaking Page
*/
get_header();

?>

<!-- Work page-->
<div class="service-request">
	<div class="one-column-template">
		<div class="wrapper">
			<div class="page-header">
				<h1><?php the_title() ?></h1>
			</div>
			<div id="primary" class="page-content">
				<?php
				/* if the current pages has a parent, i.e. we are on a subpage */
				if( $post->post_parent ){
				    $parent_title = get_the_title($post->post_parent);
				    $children = wp_list_pages("title_li=&include=".$post->post_parent."&echo=0"); // list the parent page
				    $children .= wp_list_pages("depth=1&title_li=&child_of=".$post->post_parent."&echo=0"); // append the list of children pages to the same $children variable
				}
				if ($children) { ?>
				    <ul class="submenu">
				        <?php echo $children; /*print list of pages*/ ?>
				    </ul>
				<?php } ?>
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

					$i = 1;
				 	// loop through the rows of data
				    while ( has_sub_field('module_2') ) :
				    	$i++; 
									
						if( $i > 2 ) {
							break;
						}

				        // check current row layout
				        if( get_row_layout() == 'module_2_content' ):

				        	$rows = get_field('module_2' ); // get all the rows

				        	$rand_row = $rows[ array_rand( $rows ) ]; // get a random row
				        
							$rand_row_quote = array( $rand_row['quote' ] ); // get the sub field value 
							
							if($rand_row_quote):
								foreach( $rand_row_quote as $row ):
									echo "<div>". $row ."</div>";
								endforeach;
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
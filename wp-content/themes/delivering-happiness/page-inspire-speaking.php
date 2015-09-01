<?php
/*
Template Name: Inspire Speaking Page
*/
get_header();
$theme_options = get_field('theme_options'); //getting theme option acf value
?>
<div class="speaking-page <?php echo $theme_options;?>">
	<div class="wrapper">
		<section class="hero-banner">
			<img src="<?php bloginfo('template_url') ?>/assets/images/speaking/speaking-hero.jpg" alt="" />
		</section>
		
		<section class="row two-col-layout sticky-container">
			<aside class="nav-left-sidebar">
				<h5>What we do</h5>
				<?php
				/* if the current pages has a parent, i.e. we are on a subpage */
				if( $post->post_parent ){
				    $parent_title = get_the_title($post->post_parent);
				    $children = wp_list_pages("title_li=&include=".$post->post_parent."&echo=0"); // list the parent page
				    $children .= wp_list_pages("depth=1&title_li=&child_of=".$post->post_parent."&echo=0"); // append the list of children pages to the same $children variable
				}
				if ($children) { ?>
				    <ul>
				        <?php echo $children; /*print list of pages*/ ?>
				    </ul>
				<?php } ?>
				<a href="#" class="btn primary">Click Me</a>
			</aside>
			<div class="col-right has-left-sticky">
				<h1><?php the_title(); ?></h1>
				<?php
				// check if the flexible content field has rows of data
				if( get_field('module_1') ):

				 	// loop through the rows of data
				    while ( has_sub_field('module_1') ) :
						// check current row layout
				        if( get_row_layout() == 'module_1_content' ):
				        	$title = get_sub_field('title');
				        	$image = get_sub_field('image');
				        	$content = get_sub_field('content'); ?>
				        	<article class="modules">
								<h2 style="color:<?php the_field('page_color'); ?>"><?php echo $title;?></h2>
								<div class="article-banner has-quick-links">
									<div class="banner">
										<img src="<?php echo $image['url'];?>" alt="" />
									</div>
									<aside class="nav-right-sidebar">
										<?php
							       		// check if the nested repeater field has rows of data
							        	if( have_rows('quick_links') ):

							        		echo '<h5>Quick Links</h5>';
										 	echo '<ul>';

										 	// loop through the rows of data
										    while ( have_rows('quick_links') ) : the_row();

												$linktitle = get_sub_field('link_title');
												$link = get_sub_field('link');

												echo '<li><a href="'.$link.'" target="_blank">'.$linktitle.'</a></li>';

											endwhile;

											echo '</ul>';

										endif;
										?>
									</aside>
								</div>
								<div class="default-copy"><?php echo $content;?></div>
							</article>
							<?php
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
									echo '<article class="modules">'. $row .'</article>';
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
				        	$content = get_sub_field('content');?>

				        	<article class="modules">
								<h2><?php echo $title;?></h2>
								<div class="default-copy"><?php echo $content; ?></div>
							</article>
				        <?php endif;
				    endwhile;
				endif;
				?>
				
			</div>
		</section>
	</div>
</div>
<div class="wrapper">
	<div class="sign-up-ribbon">
		<?php
		// check if the flexible content field has rows of data
		if( get_field('module_4') ):
		 	// loop through the rows of data
		    while ( has_sub_field('module_4') ) :
		        // check current row layout
		        if( get_row_layout() == 'module_4_content' ):
		        	$content = get_sub_field('content');
		        	echo $content;
		        endif;
		    endwhile;
		endif;
		?>
	</div>
</div>

<?php get_footer(); ?>
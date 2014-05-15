<?php
/*
Template Name: Advisor
*/
?>
<?php get_header(); ?>

	<div class="one-column-template">
		<div class="wrapper">
			<div class="page-header">
				<h1><?php the_title() ?></h1>
			</div>
		<section class="four-column cross-fade">
			<div class="wrapper">
				<?php
				$query = new WP_Query( array(
	                    'post_type'      => 'team_member',
	                    'tax_query'      => array(
	                        'relation' => 'AND',
	                        array(
	                            'taxonomy' => 'team_category',
	                            'field'    => 'slug',
	                            'terms'    => 'advisor'
	                        ),
	                    ),
	                    'posts_per_page' => -1,
	                    'order'          => 'ASC',
	                    'orderby'        => 'menu_order title',
	                    'meta_query'     => array(
	                        array(
	                            'key'     => '_dh_location',
	                            'value'   => array( DH_Metabox::TEAM_LOCATION_EVERYWHERE, DH_Metabox::TEAM_LOCATION_LIST ),
	                            'compare' => 'IN'
	                        )
	                    )
	               ) );
				?>
				<?php if ( $query->have_posts() ) : ?>

					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<div class="col left-col ">
							<div class="team-member">
								<div class="media">
									<img src="<?php $image = get_field( 'image' ); echo $image['url']; ?>" alt="<?php the_title(); ?>" />
								</div>
								<div class="content small">
									<div class="v-aling">
										<h3><?php the_title(); ?></h3>
										<span class="job-title"><?php the_field( 'designation' ); ?></span>
									</div>
								</div>
							</div>
							<div class="hover-content">
								<div class="v-aling">
									<a href="<?php the_permalink(); ?>" class="button">Read Bio</a>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_query(); ?>

					<?php //delivering_happiness_paging_nav(); ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>
			</div>
		</section>
		</div>
	</div>

<?php get_footer();
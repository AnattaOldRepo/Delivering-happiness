<?php get_header(); ?>

<div class="one-column-template">
	<div class="wrapper">
		<div class="page-header">
			<h1>Team Members</h1>
		</div>
	</div>
	<section class="four-column cross-fade">
		<div class="wrapper">
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
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
								<a href="#" class="button">Read Bio</a>
							</div>
						</div>
					</div>
				<?php endwhile; ?>

				<?php //delivering_happiness_paging_nav(); ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>
		</div>
	</section>
	
</div>

<?php get_footer();
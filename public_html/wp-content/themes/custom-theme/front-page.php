<?php get_header(); ?>

<div class="container"><!-- Open main container -->

	<div id="ttr_main" class="row">
		<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="header">
					<h1><?= the_title(); ?></h1>
					<p><?php the_content(__('(more...)')); ?></p>
				</div>
				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>

		<?php 
			// Step 1: Create a template file
		?>
		<div id="ajax-posts" class="col-12">
			<?php
			$args = array( 'post_type' => 'post', 
							'posts_per_page' => 10,
							);
				$loop = new WP_Query($args);
				//var_dump($loop);
				while ($loop->have_posts()) : $loop->the_post(); ?>
					<div class="text-center">
						<h2><?= get_the_title(); ?></h2>
						<?php the_content(); ?>
						<?= get_the_date(); ?>
						<?= get_post_time('G:i'); ?>
					</div>
			<?php 
				endwhile;
				wp_reset_postdata();
		?>
		</div>

		<input type="hidden" id="totalpages" value="<?= $loop->max_num_pages ?>">
		<div id="more_posts">Load More</div>
	</div>

</div><!-- Close main container -->
<?php get_footer(); ?>
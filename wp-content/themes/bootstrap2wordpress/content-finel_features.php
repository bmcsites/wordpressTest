<?php
	$final_project_features_title = get_field('final_project_features_title');
	$final_project_features_description = get_field('final_project_features_description');
?>

	<!-- PROJECT FEATURES
	================================================== -->
	<section id="project-features">
		<div class="container">
		
			<h2><?php echo $final_project_features_title ?></h2>
			<p class="lead"><?php echo $final_project_features_description ?></p>
			
			<div class="row">
				<!-- define the loop -->
				<?php $loop = new WP_Query(array('post_type' => 'project_features', 'orderby' => 'post_id' , 'order' => 'DES')); 
				?>
				<!-- start the loop -->
				<?php 
					while($loop->have_posts()) : $loop->the_post();
				?>	

				<div class="col-sm-4">
				<!-- print post image -->
				<?php
				// Must be inside a loop. 
					if ( has_post_thumbnail() ) {
					    the_post_thumbnail();
					}
				?>
					<!-- print post title -->
					<h3><?php the_title(); ?></h3>
					<!-- print post content -->
					<p><?php the_content(); ?></p>
				</div><!-- col -->

				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</div><!-- row -->
			
		</div><!-- container -->
	</section><!-- project-features -->
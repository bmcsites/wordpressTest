<?php
	$course_features_section_title = get_field('course_features_section_title');
	$course_features_section_image = get_field('course_features_section_image');
?>

	<!-- COURSE FEATURES
	================================================== -->
	<section id="course-features">
		<div class="container">
		
			<div class="section-header">

			<?php if( !empty( $course_features_section_image ) ) : ?>
				<img src="<?php echo $course_features_section_image['url']; ?>" alt="<?php echo $course_features_section_image['alt']; ?>">
			<?php endif; ?>	

				<h2><?php echo $course_features_section_title ?></h2>
			</div><!-- section-header -->
			
			<div class="row">
				<!-- define the loop -->
				<?php $loop = new WP_Query(array('post_type' => 'curse_feature', 'orderby' => 'post_id' , 'order' => 'DES')); 
				?>
				<!-- start the loop -->
				<?php 
					while($loop->have_posts()) : $loop->the_post();
				?>	

				<div class="col-sm-2">
					<i class="<?php the_field('course_features_icon'); ?>"></i>
					<h4><?php the_title(); ?></h4>
				</div><!-- end col -->
				<!-- close the loop -->
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- course-features -->
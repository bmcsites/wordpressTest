// websites related
https://underscores.me/
https://www.advancedcustomfields.com/


//plugins  :
Advanced Custom Fields
Custom Post Type UI


// template directory :
<?php bloginfo( 'stylesheet_directory' ); ?>

// site name :
<?php bloginfo( 'name' ); ?>


// get attrubate from page :
get_post_meta(page_id,key_name,single_boolien)


// get attribute from database after using Advanced Custom Fields plugin :
$income_section_title = get_field('Field Name');


// echo image obj with if statment with Advanced Custom Fields :
	<?php if( !empty( $image ) ) : ?>
		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
	<?php endif; ?>	


// echo post title in loop:
<?php the_title(); ?>

// echo post content in loop :
<?php the_content(); ?>	

// echo post image in loop :
	<?php
		if ( has_post_thumbnail() ) {
			the_post_thumbnail(array(width,height);// the_post_thumbnail(array(300,300)
		}
	?>	


// loop for posts by type with CPT UI :


	<!-- define the loop -->
	<?php $loop = new WP_Query(array('post_type' => 'project_feature', 'orderby' => 'post_id' , 'order' => 'DES')); 
	?>
	<!-- start the loop -->
	<?php 
		while($loop->have_posts()) : $loop->the_post();
	?>	
	<!-- print post image --!>
	<div class="col-sm-4">
		<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			}
		?>
		<!-- print post title --!>
		<h3><?php the_title(); ?></h3>
		<!-- print post content --!>
		<p><?php the_content(); ?></p>
	</div><!-- col -->
	
	<?php endwhile; ?>
	<?php wp_reset_query(); ?>

	
// loop for posts by type with CPT UI with Advanced Custom Fields:

	<!-- define the loop -->
	<?php $loop = new WP_Query(array('post_type' => 'Post Type Slug', 'orderby' => 'post_id' , 'order' => 'DES')); 
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

	
// call a file into your file (like require in php) 

	<?php 
		get_template_part('content', 'hero'); // look for content-hero.php
	?>
	
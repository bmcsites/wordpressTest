<?php 
	/*Advenced Castum Fields*/
	$income_feature_image = get_field('income_feature_image');
	$income_section_title = get_field('income_section_title');
	$income_section_descreption = get_field('income_section_descreption');
	$income_reson1_title = get_field('income_reson1_title');
	$income_reson1_descreption = get_field('income_reson1_descreption');
	$income_reson2_title = get_field('income_reson2_title');
	$income_reson2_descreption = get_field('income_reson2_descreption');
?>
    <!--1 BOOST YOUR INCOME
	================================================== -->
	<section id="boost-income">
		<div class="container">
			
			<div class="section-header">

			<?php if( !empty( $income_feature_image ) ) : ?>
				<img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>">
			<?php endif; ?>	

				<h2><?php echo $income_section_title ?></h2>
			</div><!-- section-header -->
			
			<p class="lead"><?php echo $income_section_descreption ?></p>
			<div class="row">
				<div class="col-sm-6">
					<h3><?php echo $income_reson1_title ?></h3>
					<p><?php echo $income_reson1_descreption ?></p>
				</div><!-- end col -->
				
				<div class="col-sm-6">
					<h3><?php echo $income_reson2_title ?></h3>
					<p><?php echo $income_reson2_descreption ?></p>
				</div><!-- end col -->
			</div><!-- row -->
		
		</div><!-- container -->
	</section><!-- boost-income -->
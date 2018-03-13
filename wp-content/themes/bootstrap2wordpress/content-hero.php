	<?php
		/*Castum Fields*/
		$prelanch_price = get_post_meta(27,'prelanch_price',true);
		$lanch_price = get_post_meta(27,'lanch_price',true);
		$finel_price = get_post_meta(27,'finel_price',true);
		$header_button_url = get_post_meta(27,'header_button_url',true);
	?>


    <!-- HERO
    ================================================== -->
    <section id="hero" data-type="background" data-speed="5">
    	<article>
    		<div class="container clearfix">
    			<div class="row">
    			
    				<div class="col-sm-5">
		    			<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/logo-badge.png" alt="Bootstrap to Wordpress" class="logo">
    				</div><!-- col -->
		    		
		    		<div class="col-sm-7 hero-text">
			    		<h1><?php bloginfo( 'name' ); ?></h1>
			            <p class="lead"><?php bloginfo( 'description' ); ?></p>
			            
			            <div id="price-timeline">
			            	<div class="price active">
			            		<h4>Pre-Launch Price <small>Ends soon!</small></h4>
			            		<span><?php echo $prelanch_price; ?></span>
			            	</div><!-- end price -->
			            	<div class="price">
			            		<h4>Launch Price <small>Coming soon!</small></h4>
			            		<span><?php echo $lanch_price; ?></span>
			            	</div><!-- end price -->
			            	<div class="price">
			            		<h4>Final Price <small>Coming soon!</small></h4>
			            		<span><?php echo $finel_price; ?></span>
			            	</div><!-- end price -->
			            </div><!-- price-timeline -->

			            <p><a class="btn btn-lg btn-danger" href="<?php echo $header_button_url ?>" role="button">Enroll now &raquo;</a></p>
		    		</div><!-- col -->
		    		
    			</div><!-- row -->
    		</div><!-- container -->
    	</article>
    </section>
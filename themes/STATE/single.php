<?php
/**
 * Single template. 
 * 
 * @package STATE
 **/

?>
<?php get_header();?>



		<!-- 
	<?php if(has_post_thumbnail()):?>
		THIS HAS A FEATURED IMAGE

		<img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class='img-fluid img-thumbnail'>
	<?php endif; ?>
		-->

		
	<?php get_template_part('template-parts/section', 'blogcontent'); ?>

	        <!-- start section -->
			<section class="bg-light-gray">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-5 col-md-6 text-center margin-5-rem-bottom wow animate__fadeIn">
                        <span class="alt-font font-weight-500 text-uppercase d-inline-block">Puede que te gusten</span>
                        <h5 class="alt-font font-weight-500 text-extra-dark-gray letter-spacing-minus-1px">Relacionados</h5>
                    </div>
                </div>
			
                <div class="row">
                    <div class="col-12 blog-content">
                        <ul class="blog-clean blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                            <li class="grid-sizer"></li>

							<?php get_template_part('template-parts/section', 'related'); ?>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

<?php get_footer();?>

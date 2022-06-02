<?php if(have_posts()) : while(have_posts()) : the_post();?>
  

        <!-- start banner section -->
        <section class="pb-0 overflow-visible position-relative bg-light-gray padding-eleven-lr lg-padding-four-lr">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-6 order-2 z-index-1 padding-10-rem-left padding-60px-bottom lg-padding-3-rem-left md-padding-15px-left">
                        <div class="d-flex flex-column justify-content-center h-100">
                            <div class="alt-font text-fast-blue text-uppercase font-weight-500 margin-30px-bottom xs-margin-10px-bottom">


                            <?php 
                            $tags = get_the_tags();    
                            if($tags):foreach($tags as $tag):
                            ?>

                                    <a class="text-fast-blue" href="<?php echo get_tag_link($tag->term_id); ?>">
                                        <?php echo $tag->name?>
                                    </a><span class="margin-10px-lr">&#8226;</span> 


                            <?php endforeach; endif;?>

                            
                            </div>

                            <h3 class="alt-font font-weight-500 letter-spacing-minus-1px text-extra-dark-gray "><?php the_title(); ?></h3>
                            <span class="alt-font d-block margin-15px-tb">By <a href="blog-grid.html"><?php echo get_userdata(1)->display_name; ?> </a> on <a href="blog-grid.html"> <?php echo get_the_date('l j F Y'); ?> </a></span>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 px-0 order-1 align-self-end md-margin-60px-bottom d-flex justify-content-center">
                        <img class="overlap-image border-radius-8px md-no-margin-bottom" src="https://via.placeholder.com/600x600" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <!-- end banner section -->
        <!-- start section -->
        <section class="padding-70px-top sm-padding-50px-top position-relative pb-10">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-12 col-xl-5 col-lg-6 last-paragraph-no-margin padding-3-half-rem-left md-padding-15px-left">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="pt-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-12 last-paragraph-no-margin wow animate__fadeIn">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 d-flex flex-wrap align-items-center mx-auto margin-35px-bottom wow animate__fadeIn">
                        <div class="col-12 col-md-9 text-center text-md-start sm-margin-10px-bottom px-0">
                            <div class="tag-cloud">

                                <?php 
                                $categories = get_the_category();    
                                foreach($categories as $category):
                                ?>
                                        <a class="text-capitalize" href="<?php echo get_category_link($category->term_id); ?>">
                                            <?php echo $category->name?>
                                        </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-10 text-center elements-social social-icon-style-09 mx-auto">
                        <ul class="medium-icon">
                            <li class="wow animate__fadeIn" data-wow-delay="0.2s"><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i><span></span></a></li>
                            <li class="wow animate__fadeIn" data-wow-delay="0.3s"><a class="twitter" href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i><span></span></a></li>
                            <li class="wow animate__fadeIn" data-wow-delay="0.4s"><a class="instagram" href="http://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i><span></span></a></li>
                            <li class="wow animate__fadeIn" data-wow-delay="0.5s"><a class="linkedin" href="http://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i><span></span></a></li>
                            <li class="wow animate__fadeIn" data-wow-delay="0.6s"><a class="behance" href="http://www.behance.com/" target="_blank"><i class="fab fa-behance"></i><span></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->


<?php endwhile; else: endif;?>
<?php if(have_posts()) : while(have_posts()) : the_post();?>



            <?php 

                    $id = get_the_category(get_the_ID())['0']->id; 
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 3,
                        'post_status' => 'publish',
                        'category'    => get_the_category()[0]->term_id
                    ));

                    foreach($recent_posts as $post):
            ?>
            
                
            <!-- start blog item -->
            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.2s">
                <div class="blog-post text-center border-radius-6px bg-white box-shadow box-shadow-large-hover">
                    <div class="blog-post-image bg-gradient-fast-blue-purple">
                        <a href="<?php echo get_permalink( $post['ID']) ?>"><img src="<?php echo get_the_post_thumbnail_url($post['ID'],'blog-related') ?>" alt="<?php echo get_the_title( $post['ID']) ?>">
                            <div class="blog-rounded-icon bg-white border-color-white absolute-middle-center">
                                <i class="feather icon-feather-arrow-right text-extra-dark-gray icon-extra-small"></i>
                            </div>
                        </a>
                    </div>
                    <div class="post-details padding-30px-all xl-padding-25px-lr">
                        <a href="<?php echo get_permalink( $post['ID']); ?>" class="post-author text-medium text-uppercase"> <?php get_the_author($post['ID']) ?> </a>
                        <a href="<?php echo get_permalink( $post['ID']); ?>" class="text-extra-dark-gray font-weight-500 alt-font d-block"> <?php echo get_the_title($post['ID']) ?> </a>
                    </div>
                </div>
            </li>
            <!-- end blog item -->

            <?php endforeach; ?>

<?php endwhile; else: endif;?>
<?php 
    $recent_posts = wp_get_recent_posts(array(
        'post_type'   => 'casas',
        'numberposts' => 3,
        'post_status' => 'publish',
    ));

    foreach($recent_posts as $post):
?>



                        <div class="col text-center md-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.1s">
                            <a href="<?php the_permalink($post['ID']); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url($post['ID']) ?>" class=" wow animate__zoomIn" alt="<?php echo get_the_title( $post['ID']) ?>" data-wow-delay="0.3s" alt="">
                                <div class="padding-40px-tb position-relative text-center d-flex align-items-center justify-content-center w-auto xs-padding-15px-tb">
                                    <div class="d-inline-block align-top">
                                        <div class="text-large text-tussock font-weight-600 px-3 line-height-30px mb-3"><?php echo get_the_title( $post['ID']); ?></div>
                                    </div>
                                </div>
                            </a>
                        </div>



<?php endforeach; ?>
  

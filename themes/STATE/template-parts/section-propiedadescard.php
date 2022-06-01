<?php 
/**
 * Propiedades Card Template. 
 * 
 * @package STATE
 **/

    // First lets set some arguments for the query:
    $args = array(
        'post_type' => 'propiedades',
        'posts_per_page' => 20
        // Several more arguments could go here. Last one without a comma.
    );

    // Query the posts:
    $propiedades_query = new WP_Query($args);

    // Loop through the obituaries:
    while ($propiedades_query->have_posts()) : $propiedades_query->the_post();
    
        
    echo "
        <li class='grid-item photography wow animate__fadeIn'>
            <div class='portfolio-box border-radius-6px box-shadow-large'>
                <div class='portfolio-image bg-gradient-fast-blue-purple'>
                <a href=''><span class='alt-font text-extra-dark-gray font-weight-500'>
                    <img class='img-thumbnail' src='"; echo  get_the_post_thumbnail_url('post-thumbnail'); echo "' alt='' />
                </a>
            </div>
            <div class='portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb'>
                <a href='single-project-page-01.html'><span class='alt-font text-extra-dark-gray font-weight-500'>Magazine Cover</span></a>
                <span class='text-medium d-block margin-one-bottom'>Photography</span>
            </div>
            </div>
        </li>
        ";

     echo  get_the_post_thumbnail_url();
    endwhile;

    // Reset Post Data
    wp_reset_postdata();      
?>
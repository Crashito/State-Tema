<?php if(have_posts()) : while(have_posts()) : the_post();?>


                              <!-- start blog item -->
                              <li class="grid-item wow animate__fadeIn">
                                <div class="blog-post">
                                    <div class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">
                                        <a href="<?php the_permalink(); ?>"><img src="https://via.placeholder.com/800x560" alt=""/></a>
                                    </div>
                                    <div class="post-details margin-30px-bottom md-margin-10px-bottom xs-no-margin-bottom">
                                        <a href="<?php the_permalink(); ?>" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom"><?php the_title();?></a>
                                        <p class="w-95 text-truncate"><?php   substr( the_excerpt() , 100) ; ?></p>
                                        <span class="separator bg-gradient-light-purple-light-orange"></span>
                                        <a href="<?php the_permalink(); ?>" class="alt-font font-weight-500 text-extra-small text-uppercase text-gradient-light-purple-light-orange">Ver más</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->  

  
<?php endwhile; else: endif;?>
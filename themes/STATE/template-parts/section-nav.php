<?php
/**
 * Front page template.
 * 
 * @package STATE
 **/
?>

<header>
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-transparent header-light fixed-top header-reverse-scroll">
                <div class="container-lg nav-header-container py-2">
                    <div class="col-auto col-sm-6 col-lg-2 me-auto ps-lg-0">
                        <a class="navbar-brand" href="<?php echo home_url() ?>">
                            
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/logotipo_main_02.png" class="default-logo" alt="">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/logotipo_main_02.png"  class="alt-logo" alt="">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/logotipo_main_02.png" class="mobile-logo" alt="">
                        </a>
                    </div>
                    <div class="col-auto menu-order px-lg-0">
                        <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                                         <?php
                                        wp_nav_menu( array(
                                        'theme_location'  => 'top-desktop-menu',
                                        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                                        'container'       => 'div',
                                        'container_class' => 'collapse navbar-collapse',
                                        'container_id'    => 'bs-example-navbar-collapse-1',
                                        'menu_class'      => 'navbar-nav mr-auto',
                                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker'          => new WP_Bootstrap_Navwalker(),
                                        ) );
                                        ?>
                        </div>
                    </div>
                    <div class="col-auto text-end pe-0 font-size-0">
                        <div class="header-search-icon search-form-wrapper">
                            <a href="javascript:void(0)" class="search-form-icon header-search-form"><i class="feather icon-feather-search"></i></a>
                            <!-- start search input -->
                            <?php get_search_form(); ?>
                            <!-- end search input -->
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation -->
</header>
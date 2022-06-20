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
                        <a class="navbar-brand" href="index.html">
                            
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/logotipo_black.png" class="default-logo" alt="">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/logotipo_black.png"  class="alt-logo" alt="">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/logotipo_black.png" class="mobile-logo" alt="">
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
                            <div class="form-wrapper">
                                <button title="Close" type="button" class="search-close alt-font">×</button>
                                <form id="search-form" role="search" method="get" class="search-form text-start" action="search-result.html">
                                    <div class="search-form-box">
                                        <span class="search-label alt-font text-small text-uppercase text-medium-gray">What are you looking for?</span>
                                        <input class="search-input alt-font" id="search-form-input5e219ef164995" placeholder="Enter your keywords..." name="s" value="" type="text" autocomplete="off">
                                        <button type="submit" class="search-button">
                                            <i class="feather icon-feather-search" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- end search input -->
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation -->
</header>
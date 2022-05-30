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
                <div class="container-lg nav-header-container">
                    <div class="col-auto col-sm-6 col-lg-2 me-auto ps-lg-0">
                        <a class="navbar-brand" href="index.html">
                            <img src="https://via.placeholder.com/150x150" data-at2x="https://via.placeholder.com/150x150" class="default-logo" alt="">
                            <img src="https://via.placeholder.com/150x150" data-at2x="https://via.placeholder.com/150x150" class="alt-logo" alt="">
                            <img src="https://via.placeholder.com/150x150" data-at2x="https://via.placeholder.com/150x150" class="mobile-logo" alt="">
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
                                                wp_nav_menu(
                                                    array(
                                                        'menu'              => 'ul', // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                                                        'menu_class'        => 'navbar-nav alt-font', // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                                                        'menu_id'           => '', // (string) The ID that is applied to the ul 3element which forms the menu. Default is the menu slug, incremented.
                                                        'container'         => '', // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                                                        'container_class'   => '', // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
                                                        'container_id'      => '', // (string) The ID that is applied to the container.
                                                        //'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback', // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
                                                        'before'            => '', // (string) Text before the link markup.
                                                        'after'             => '', // (string) Text after the link markup.
                                                        'link_before'       => '', // (string) Text before the link text.
                                                        'link_after'        => '', // (string) Text after the link text.
                                                        // ** Si se activa echo y se deja vacio, el menu desaparece
                                                        //'echo'              => "", // (bool) Whether to echo the menu or return it. Default true.
                                                        'depth'             => 0, // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
                                                        //'walker'            => new WP_Bootstrap_Navwalker(), // (object) Instance of a custom walker class.
                                                        'theme_location'    => 'top-desktop-menu', // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
                                                        // ** Si se activa items_wrap y se deja vacio, el 'menu desaparece
                                                        //'items_wrap'        => '<li class="nav-item">%3$s</li>', // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
                                                        'item_spacing'      => '', // (string) Whether to preserve whitespace within the menu's HTML
                                                        //'add_li_class'      => 'nav-item dropdown simple-dropdown',
                                                        'link_class'   => 'nav-link'
                                                    )
                                                );
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
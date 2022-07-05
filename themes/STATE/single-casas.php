<?php
/**
 * Single template. 
 * Pagina de un post de blog.
 * 
 * @package STATE
 **/


?>
<?php get_header();?>

    <style>
        #start-banner-section::before{
            background-image: url("<?php echo get_the_post_thumbnail_url()?>");
        }
    </style>
        <!-- start banner section -->
        <section id="start-banner-section" class="pb-0 overflow-visible position-relative padding-eleven-lr lg-padding-four-lr">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-5 order-2 z-index-1 padding-10-rem-left padding-60px-bottom lg-padding-3-rem-left md-padding-15px-left">
                        <div class="d-flex flex-column justify-content-center h-100">
                            <h3 class="alt-font font-weight-500 letter-spacing-minus-1px text-white title-small"><?php echo get_field('colonia');?></h3>
                            <h6 class="alt-font d-block margin-15px-bottom text-white title-extra-small"> <?php echo get_field('calle'); ?>  C.P. <?php echo get_field('codigo_postal'); ?> </h6>
                            <h6 class="alt-font d-block margin-15px-bottom text-white title-extra-small"> $<?php echo number_format(intval(get_field('precio')), 2, '.', ','); ?> MXN </h6>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 px-0 order-1 align-self-end md-margin-60px-bottom d-flex justify-content-center">
                        <img class="overlap-image border-radius-8px md-no-margin-bottom border rounded-3 shadow" src="<?php echo get_field('imagen_principal');?>" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <!-- end banner section -->


        
        <!-- start section -->
        <section class="padding-70px-top sm-padding-50px-top bg-light-gray position-relative padding-60px-bottom">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-12 col-xl-5 col-lg-6 last-paragraph-no-margin padding-3-half-rem-left md-padding-15px-left">
                        <?php echo get_field('descripcion-corta'); ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <section class="mt-0 pt-0 bg-light-gray">
            <!-- start container -->
            <div class="container-fluid padding-fourteen-lr">
                    <div class="row">
                                <div class="col-7 pt-5">
                                        <!-- start container -->
                                        <div style="max-width : 700px;">
                                            <div class="row">
                                                <div class="col-12 tab-style-05">
                                                    <div class="tab-box justify-content-start">
                                                        <!-- start tab navigation -->
                                                        <ul class="nav nav-tabs margin-5-rem-bottom md-margin-5-rem-bottom xs-margin-15px-lr font-weight-500 text-uppercase">
                                                            <li class="nav-item alt-font"><a class="nav-link active" href="#tab-nine1" data-bs-toggle="tab">General</a></li>
                                                            <li class="nav-item alt-font"><a class="nav-link" href="#tab-nine2" data-bs-toggle="tab">Descripcion</a></li>
                                                            <li class="nav-item alt-font"><a class="nav-link" href="#tab-nine3" data-bs-toggle="tab">Ubicación</a></li>
                                                            <li class="nav-item alt-font"><a class="nav-link" href="#tab-nine4" data-bs-toggle="tab">Imagenes</a></li>
                                                        </ul>
                                                        <!-- end tab navigation -->
                                                    </div>
                                                    <div class="tab-content">
                                                        <!-- start tab content -->
                                                        <div class="tab-pane med-text fade in active show" id="tab-nine1">
                                                                <div class="row d-flex justify-content-between">
                                                                    <div class="col-3 d-flex flex-row">
                                                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/001-check-list-01.png" style="max-width: 50px; max-height: 50px; margin-right:20px" alt="">
                                                                        <div class="d-flex flex-column">
                                                                                <span class="text-small"> Estatus: </span>  
                                                                                <span class="fw-bolder "><?php the_field('estatus');?></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="offset-9"></div>
                                                                </div>


                                                                <hr class="my-5">


                                                                
                                                                <div class="row d-flex justify-content-between">    
                                                                    <div class="d-flex flex-row padding-10px-bottom"> 
                                                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/002-ubicacion-01.png" style="max-width: 50px; max-height: 50px; margin-right:20px" alt="">
                                                                        <div class="d-flex flex-column">
                                                                                <span class="text-small"> Tipo de Terreno: </span>  
                                                                                <span class="fw-bolder "><?php the_field('tipo_terreno');?></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex flex-row padding-10px-bottom"> 
                                                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/003-grafico-de-area-01.png" style="max-width: 50px; max-height: 50px; margin-right:20px" alt="">
                                                                        <div class="d-flex flex-column">
                                                                                <span class="text-small"> Tamaño de Terreno: </span>  
                                                                                <span class="fw-bolder "><?php the_field('tamano-terreno');?></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex flex-row padding-10px-bottom"> 
                                                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/004-eleccion-01.png" style="max-width: 50px; max-height: 50px; margin-right:20px" alt="">
                                                                        <div class="d-flex flex-column">
                                                                                <span class="text-small"> Área de construcción: </span>  
                                                                                <span class="fw-bolder "><?php the_field('area_de_construccion');?></span>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <hr class="my-5">


                                                                <div class="row">
                                                                    <div class="col-3 d-flex flex-row padding-10px-bottom"> 
                                                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/005-dos-plantas-01.png" style="max-width: 50px; max-height: 50px; margin-right:20px" alt="">
                                                                        <div class="d-flex flex-column">
                                                                                <span class="text-small"> Plantas: </span>  
                                                                                <span class="fw-bolder "><?php the_field('plantas');?></span>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-3 d-flex flex-row padding-10px-bottom"> 
                                                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/006-cuarto-01.png" style="max-width: 50px; max-height: 50px; margin-right:20px" alt="">
                                                                        <div class="d-flex flex-column">
                                                                                <span class="text-small"> Recamaras: </span>  
                                                                                <span class="fw-bolder "><?php the_field('recamaras');?></span>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-3 d-flex flex-row padding-10px-bottom"> 
                                                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/008-cuarto-de-bano-01.png" style="max-width: 50px; max-height: 50px; margin-right:20px" alt="">
                                                                        <div class="d-flex flex-column">
                                                                                <span class="text-small"> Baños: </span>  
                                                                                <span class="fw-bolder "><?php the_field('banos');?></span>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-3 d-flex flex-row padding-10px-bottom"> 
                                                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/007-bano-publico-01.png" style="max-width: 50px; max-height: 50px; margin-right:20px" alt="">
                                                                        <div class="d-flex flex-column">
                                                                                <span class="text-small"> Medios Baños: </span>  
                                                                                <span class="fw-bolder "><?php the_field('medio_bano');?></span>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-3 d-flex flex-row padding-10px-bottom"> 
                                                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/009-garaje-01.png" style="max-width: 50px; max-height: 50px; margin-right:20px" alt="">
                                                                        <div class="d-flex flex-column">
                                                                                <span class="text-small"> Cochera: </span>  
                                                                                <span class="fw-bolder "><?php the_field('cochera');?></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-3 d-flex flex-row padding-10px-bottom"> 
                                                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/010-lavadora-01.png" style="max-width: 50px; max-height: 50px; margin-right:20px" alt="">
                                                                        <div class="d-flex flex-column">
                                                                                <span class="text-small"> Cuarto de Lavado: </span>  
                                                                                <span class="fw-bolder "><?php the_field('cuarto_de_lavado');?></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-3 d-flex flex-row padding-10px-bottom"> 
                                                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/011-monitor-de-tv-01.png" style="max-width: 50px; max-height: 50px; margin-right:20px" alt="">
                                                                        <div class="d-flex flex-column">
                                                                                <span class="text-small"> Sala de TV: </span>  
                                                                                <span class="fw-bolder "><?php the_field('sala_de_tv');?></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-3 d-flex flex-row padding-10px-bottom"> 
                                                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/012-balcon-01.png" style="max-width: 50px; max-height: 50px; margin-right:20px" alt="">
                                                                        <div class="d-flex flex-column">
                                                                                <span class="text-small"> Balcon: </span>  
                                                                                <span class="fw-bolder "><?php the_field('balcon');?></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-3 d-flex flex-row padding-10px-bottom"> 
                                                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/013-jardin-01.png" style="max-width: 50px; max-height: 50px; margin-right:20px" alt="">
                                                                        <div class="d-flex flex-column">
                                                                                <span class="text-small"> Jardin: </span>  
                                                                                <span class="fw-bolder "><?php the_field('jardin');?></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-3 d-flex flex-row padding-10px-bottom"> 
                                                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/001-check-list-01.png" style="max-width: 50px; max-height: 50px; margin-right:20px" alt="">
                                                                        <div class="d-flex flex-column">
                                                                                <span class="text-small"> Ubicación: </span>  
                                                                                <span class="fw-bolder "><?php the_field('ubicacion');?></span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                
                                                            
                                                        </div>
                                                        <!-- end tab content -->
                                                        <!-- start tab content -->
                                                        <div class="tab-pane fade in" id="tab-nine2">
                                                            <div class="panel-group accordion-event accordion-style-04" id="accordion2" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                                                <div class="row">
                                                                        <div class="col-12 px-5">
                                                                            
                                                                            <?php the_field('descripcion'); ?>
                                                                        </div>
                                                                </div>    
                                                            </div>
                                                        </div>
                                                        <!-- end tab content -->
                                                        <!-- start tab content -->
                                                        <div class="tab-pane fade in" id="tab-nine3">
                                                            <div class="panel-group accordion-event accordion-style-04" id="accordion3" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                                                
                                                                <?php echo get_field('mapa'); ?>
                                                            </div>
                                                        </div>
                                                        <!-- end tab content -->
                                                        <!-- start tab content -->
                                                        <div class="tab-pane fade in" id="tab-nine4">
                                                            
                                                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                                                                <div class="carousel-indicators">
                                                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                                                </div>
                                                                <div class="carousel-inner">
                                                                    <div class="carousel-item active">  
                                                                        <img src="<?php echo get_field('imagen-01'); ?>" class="d-block w-100" alt="...">
                                                                    </div>
                                                                    <div class="carousel-item">
                                                                        <img src="<?php echo get_field('imagen-02'); ?>" class="d-block w-100" alt="...">
                                                                    </div>
                                                                    <div class="carousel-item">
                                                                        <img src="<?php echo get_field('imagen-03'); ?>" class="d-block w-100" alt="...">
                                                                    </div>
                                                                    <div class="carousel-item">
                                                                        <img src="<?php echo get_field('imagen-04'); ?>" class="d-block w-100" alt="...">
                                                                    </div>
                                                                    <div class="carousel-item">
                                                                        <img src="<?php echo get_field('imagen-05'); ?>" class="d-block w-100" alt="...">
                                                                    </div>
                                                                </div>
                                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Previous</span>
                                                                </button>
                                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Next</span>
                                                                </button>
                                                                </div>
                                                            
                                                        </div>
                                                        <!-- end tab content -->
                                                    </div>
                                                </div>       
                                            </div>
                                        </div>
                                        <!-- end container -->
                                </div>
                                <div class="col-4">
                                    <div class="bg-white box-shadow-large padding-60px-all rounded-3">
                                        <h6 class="title-very-small mb-3">Contáctanos</h6>
                        
                                        

                                       
                                            <?php
                                                  echo do_shortcode(
                                                    '[contact-form-7 id="5" title="Formulario de contacto 1"]'
                                                  );
                                                  
                                            ?>

                                        
                                            
                                        

                                    </div>
                                </div>
                    </div>
            </div>
            <!-- end container -->
        </section>





<?php get_footer();?>
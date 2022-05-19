jQuery(document).ready(function () {
    
    function changeOpacityHero() {
        let parallaxOpacity = jQuery('#parallax-opacity');
        let scrollVertical = jQuery(window).scrollTop();

        if (scrollVertical > 85) {
            parallaxOpacity.addClass('opacity-medium',{duration:500});
            parallaxOpacity.removeClass('opacity-light',{duration:500});
        } else if (scrollVertical < 100) {
            parallaxOpacity.addClass('opacity-light',{duration:500});
            parallaxOpacity.removeClass('opacity-medium',{duration:500});
        }

    }
    jQuery(window).on('scroll', changeOpacityHero);

    function changeColorArrowNavBar() {
        let navBarArrow = jQuery('.navbar-nav .nav-link i');
        let scrollVertical = jQuery(window).scrollTop();

        if (scrollVertical > 85) {
            navBarArrow.css('color','');

        } else if (scrollVertical < 50) {
            navBarArrow.css('color','#fff');
        }
    }
    jQuery(window).on('scroll', changeColorArrowNavBar);

    function changeBrandNavBar() {
        let navBarLightBrand = jQuery('#nav-light .navbar-brand.logo-light');
        let navBarDarkBrand = jQuery('#nav-light .navbar-brand.logo-dark');
        let scrollVertical = jQuery(window).scrollTop();
        let windowWidth = jQuery(window).width();


        if (scrollVertical > 101 ) {
            navBarLightBrand.addClass('d-none');
            navBarDarkBrand.removeClass('d-none');

        } else if ( scrollVertical <= 100 ) {
            navBarLightBrand.removeClass('d-none');
            navBarDarkBrand.addClass('d-none');
        }
        
    }
    jQuery(window).on('scroll', changeBrandNavBar);



    
    function imageFadeOut(event) {     
          
        let $trigger = event.attr("class").split(" ");
        let $activador = $trigger[2].slice(-2);

        let $acordeonTargets = jQuery('.acordeon-target');
        
        $acordeonTargets.each(function ($index,$target) {
           
            let $classesNames = $target.className.split(" ");
            let $targetIndex = $classesNames[0].slice(-2)
            let $trigger = jQuery(`.acordeon-image-target${$targetIndex}`);

            $trigger.removeClass('active d-none');
            $trigger.addClass('d-none');

            if ($activador === $targetIndex) {
                
                $trigger.removeClass('d-none');
                $trigger.addClass('active');
                
                console.log('Entra');
            }

        })
                

    }
    jQuery('.acordeon-image-trigger').on('click', function (event) {
        imageFadeOut($(this), event);
    });
    
});

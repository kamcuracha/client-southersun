jQuery(document).ready(function($) {

    var util = {
        About: {

            init: function() {
                $('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 10,
                    responsiveClass: true,
                    pagination: false,
                    responsive:{
                        0:{
                            items: 1,
                            nav: true,
                            center: true
                        },
                        600:{
                            items: 2,
                            nav: true
                        },
                        1000:{
                            items: 3,
                            nav: true,
                            loop: false
                        }
                    }
                });
            }

        }
    };


    util.About.init();
});


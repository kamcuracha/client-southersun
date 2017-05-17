jQuery(document).ready(function($) {

    var util = {
        Portfolio: {

            init: function() {
                var $container = jQuery('.card-holder');
                $container.isotope({ //Isotope options, 'item' matches the class in the PHP
                    itemSelector: '.card',
                    layoutMode: 'masonry'
                });

                //Add the class selected to the item that is clicked, and remove from the others
                var $optionSets = $('.card-filter'),
                    $optionLinks = $optionSets.find('a');

                $optionLinks.click(function() {
                    var $this = $(this);
                    // don't proceed if already selected
                    if ($this.hasClass('active')) {
                        return false;
                    }

                    var $optionSet = $this.parents('#filters');
                    $optionSets.find('.active').removeClass('active');
                    $this.addClass('active');

                    //When an item is clicked, sort the items.
                    var selector = $(this).attr('data-filter');
                    $container.isotope({
                        filter: selector
                    });
                    $container.isotope('reLayout');

                    return false;
                });
            }

        }
    };


    util.Portfolio.init();
});


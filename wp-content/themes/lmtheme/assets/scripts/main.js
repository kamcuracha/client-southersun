jQuery(document).ready(function($) {
    var util = {
        Global: {
            init: function() {
                this.stickyNav();
                this.modalSubscribe();
                if(location.pathname == "/") this.owlCarousel();
                if(window.location.href.indexOf("service") > -1) this.serviceAccordion();
                // if(window.location.href.indexOf("contact-us") > -1) this.gmap();
            },
            stickyNav: function() {
                $(window).scroll(function() {
                    clearTimeout($.data(this, "scrollCheck")), $.data(this, "scrollCheck", setTimeout(function() {
                        $(window).scrollTop() > 160 ? $("body").addClass("navbar-shrink").trigger('shrinked') : $("body").removeClass("navbar-shrink").trigger('unshrinked')
                    }, 10))
                });
            },
            owlCarousel: function() {
                $('.owl-carousel').owlCarousel({
                    loop: true,
                    items: 1,
					margin: 10,
					autoplay: true,
					autoplayTimeout: 7000,
					autoplayHoverPause: false,
                    autoHeight: true,
                    pagination: true
                });
            },
            gmap: function() {
				
                if ( jQuery('#map-canvas').length != 0 ) {
					
                  var $el = jQuery('#map-canvas'),
                    address = $el.data('title'),
					geocoder,
					map,
					mapOptions = {
                      draggable: false,
					  zoom: 14,
					  mapTypeId: google.maps.MapTypeId.ROADMAP,
                      styles: [	{		"featureType":"landscape",		"stylers":[			{				"hue":"#FFA800"			},			{				"saturation":0			},			{				"lightness":0			},			{				"gamma":1			}		]	},	{		"featureType":"road.highway",		"stylers":[			{				"hue":"#53FF00"			},			{				"saturation":-73			},			{				"lightness":40			},			{				"gamma":1			}		]	},	{		"featureType":"road.arterial",		"stylers":[			{				"hue":"#FBFF00"			},			{				"saturation":0			},			{				"lightness":0			},			{				"gamma":1			}		]	},	{		"featureType":"road.local",		"stylers":[			{				"hue":"#00FFFD"			},			{				"saturation":0			},			{				"lightness":30			},			{				"gamma":1			}		]	},	{		"featureType":"water",		"stylers":[			{				"hue":"#00BFFF"			},			{				"saturation":6			},			{				"lightness":8			},			{				"gamma":1			}		]	},	{		"featureType":"poi",		"stylers":[			{				"hue":"#679714"			},			{				"saturation":33.4			},			{				"lightness":-25.4			},			{				"gamma":1			}		]	}]
                    },
					marker;

				  function codeAddress() {
					geocoder.geocode( { 'address': address}, function(results, status) {
					  if (status == google.maps.GeocoderStatus.OK) {
						map.setCenter(results[0].geometry.location);
						if(marker)
						  marker.setMap(null);
						marker = new google.maps.Marker({
							map: map,
							position: results[0].geometry.location,
							draggable: false
						});
					  } else {
						alert('Geocode was not successful for the following reason: ' + status);
					  }
					});
				  }

				  geocoder = new google.maps.Geocoder();
				  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
				  codeAddress();

                }
            },
            modalSubscribe: function() {
                var modal = document.getElementById('modalSubs');
                var btn = document.getElementById("modalBtn");
                var span = document.getElementsByClassName("modalClose")[0];

                btn.onclick = function() {
                    modal.style.display = "block";
                }

                span.onclick = function() {
                    modal.style.display = "none";
                }

                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            },
            serviceAccordion: function() {
                $(".accordion").accordion({
                    header: 'h4'
                });
            }
        }
    };

    $(window).load(function() {
        $("#preloader").fadeOut("slow", function() {
            $(this).remove()
        })
    });

    util.Global.init();

    $(".animatedParent").appear();

    $(document.body).on("appear", ".animatedParent", function(t, e) {
        var i = $(this).find(".animated"),
            s = $(this);
        if (void 0 != s.attr("data-sequence")) {
            var n = $(this).find(".animated:first").attr("data-id"),
                o = n,
                a = $(this).find(".animated:last").attr("data-id");
            $(s).find(".animated[data-id=" + o + "]").addClass("go"), o++, delay = Number(s.attr("data-sequence")), $.doTimeout(delay, function() {
                return $(s).find(".animated[data-id=" + o + "]").addClass("go"), ++o, a >= o ? !0 : void 0
            })
        } else i.addClass("go")
    }), $(document.body).on("disappear", ".animatedParent", function(t, e) {
        $(this).hasClass("animateOnce") || $(this).find(".animated").removeClass("go")
    }), $(window).load(function() {
        $.force_appear()
    }), "function" != typeof Object.create && (Object.create = function(t) {
        function e() {}
        return e.prototype = t, new e
    })
});
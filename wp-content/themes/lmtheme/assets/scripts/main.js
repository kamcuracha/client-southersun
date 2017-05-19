jQuery(document).ready(function($) {
    var util = {
        Global: {
            init: function() {
                this.stickyNav(),
                this.owlCarousel();
                this.gmap()
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
                    pagination: false
                });
            },
            gmap: function() {
				
                if ( jQuery('#map-canvas').length != 0 ) {
					
                  var $el = jQuery('#map-canvas'),
                    address = $el.data('title'),
					geocoder,
					map,
					mapOptions = {
					  zoom: 17,
					  mapTypeId: google.maps.MapTypeId.ROADMAP
					},
					marker;

				  function codeAddress() {
					//var address = document.getElementById('address').value;
					geocoder.geocode( { 'address': address}, function(results, status) {
					  if (status == google.maps.GeocoderStatus.OK) {
						map.setCenter(results[0].geometry.location);
						if(marker)
						  marker.setMap(null);
						marker = new google.maps.Marker({
							map: map,
							position: results[0].geometry.location,
							draggable: true
						});
						google.maps.event.addListener(marker, "dragend", function() {
						  document.getElementById('lat').value = marker.getPosition().lat();
						  document.getElementById('lng').value = marker.getPosition().lng();
						});
						document.getElementById('lat').value = marker.getPosition().lat();
						document.getElementById('lng').value = marker.getPosition().lng();
					  } else {
						alert('Geocode was not successful for the following reason: ' + status);
					  }
					});
				  }

				  geocoder = new google.maps.Geocoder();
				  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
				  codeAddress();

                }
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
window.onload = function(){


  var LatLng = {lat: 49.4436973, lng: 32.0304895}; // NOTE: put here true cords
  var map = new google.maps.Map(document.getElementById('map'), {
    center: LatLng,
    zoom: 15,
    scrollwheel: false
  });

  google.maps.event.addListener(map, 'click', function (event) {
    this.setOptions({
        draggable: true,
        scrollwheel: true
    });
    var m = this;
    setTimeout(function () {
        m.setOptions({
            draggable: false,
            scrollwheel: false
        });
    }, 3000);
	});

	google.maps.event.addListener(map, 'mouseout', function (event) {
    this.setOptions({
        draggable: false,
        scrollwheel: false
    });
	});

	google.maps.event.addListenerOnce(map, 'idle', function() {
    google.maps.event.trigger(map, 'resize');
	});

  var marker = new google.maps.Marker({
    position: LatLng,
    map: map,
    icon: "http://shtory-decor.com.ua/wp-content/themes/decor/img/contacts/marker.png"
  });


  $('.slider').slick({
      infinite: true,
      speed: 300,
      slidesToShow: 5,
      slidesToScroll: 5,
      autoplay: true,
      // prevArrow: '<button type="button" class="slick-prev slick-arrow"></button>',
      // nextArrow: '<button type="button" class="slick-next slick-arrow"></button>',
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });


}();

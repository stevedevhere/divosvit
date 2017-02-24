window.onload = function(){


  var contacts_page = document.getElementById("contacts-page");
  var mfp_use = document.querySelector(".mfp-hide");

  if (mfp_use) {
    $('.popup-letter-opener').magnificPopup({
      type: "inline"
    });

    $('.popup-schedule-opener').magnificPopup({
      type: "inline"
    });

    $('.popup-PD-info-opener').magnificPopup({
      type: "inline"
    });

    $('.portf-popup').click(function() {
      var gallery_ID = $(this).attr('data-mfp-src');
      console.log(gallery_ID);
      switch(gallery_ID) {
        case "#restor-eidel":
          $(".re-item")[0].click();
          break;

        case "#cafe-mont":
          $(".cm-item")[0].click();
          break;

        case "#restor-forest":
          $(".rf-item")[0].click();
          break;

      }
      $(".restor-eidel-item")[0].click();
    });

    $('.gallery').each(function() { // the containers for all your galleries
      $(this).magnificPopup({
        delegate: 'img', // the selector for gallery item
        type: 'image',
        closeMarkup: '<button title="%title%" type="button" class="mfp-close gallery-close">&#215;</button>',
        gallery: {
          enabled:true
        },
        // overflowY: auto
      });
    });

  }

  if(contacts_page) {
    var LatLng = {lat: 49.8142883, lng: 24.0590634}; //49.8142883,24.0590634
    var map = new google.maps.Map(document.getElementById('map'), {
      center: LatLng,
      zoom: 17,
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
      position: {lat: 49.814157, lng: 24.0633276},
      map: map
    });

  }


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

$(document).ready(function(){

	$('.slider').slider();



/*	var $grid = $('.grid').masonry({

		itemSelector: '.grid-item',

		percentPosition: true,

		//gutter:5,

		columnWidth: '.grid-sizer'

	});

// layout Masonry after each image loads

$grid.imagesLoaded().progress( function() {

	$grid.masonry();

});  

*/

$('.grid').masonry({

  itemSelector: '.grid-item',

  //columnWidth: 180,

  gutter:5,

  isFitWidth: true

});

     
});	

/* ----------- VALORES --------------- */

$("#calidad").on({
    mouseenter: function () {
      $("#calidad").css({ color: '#2481ab' });
      $("#calidadh5").css({ color: '#2481ab' });
      $("#calidadp").css({ color: '#2481ab' });
    },
    mouseleave: function () {
      $("#calidad").css({ color: '#fff' });
      $("#calidadh5").css({ color: '#fff' });
      $("#calidadp").css({ color: '#4fc3f7 ' });
    }
});

$("#pasion").on({
    mouseenter: function () {
      $("#pasion").css({ color: '#2481ab' });
      $("#pasionh5").css({ color: '#2481ab' });
      $("#pasionp").css({ color: '#2481ab' });
    },
    mouseleave: function () {
      $("#pasion").css({ color: '#fff' });
      $("#pasionh5").css({ color: '#fff' });
      $("#pasionp").css({ color: '#4fc3f7 ' });
    }
});

$("#honradez").on({
    mouseenter: function () {
      $("#honradez").css({ color: '#2481ab' });
      $("#honradezh5").css({ color: '#2481ab' });
      $("#honradezp").css({ color: '#2481ab' });
    },
    mouseleave: function () {
      $("#honradez").css({ color: '#fff' });
      $("#honradezh5").css({ color: '#fff' });
      $("#honradezp").css({ color: '#4fc3f7 ' });
    }
});

$("#creatividad").on({
    mouseenter: function () {
      $("#creatividad").css({ color: '#2481ab' });
      $("#creatividadh5").css({ color: '#2481ab' });
      $("#creatividadp").css({ color: '#2481ab' });
    },
    mouseleave: function () {
      $("#creatividad").css({ color: '#fff' });
      $("#creatividadh5").css({ color: '#fff' });
      $("#creatividadp").css({ color: '#4fc3f7 ' });
    }
});
 var map;
      function initMap() {
        var latitude = $('#google-map').data('latitude')
        var longitude = $('#google-map').data('longitude')
        var myLatlng = new google.maps.LatLng(latitude,longitude);
        var mapOptions = {
            zoom: 14,
            scrollwheel: false,
            center: myLatlng
          };
        map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
        var contentString = '';
        var infowindow = new google.maps.InfoWindow({
          content: '<div class="map-content"><ul class="address">' + $('.address').html() + '</ul></div>'
        });
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map
        });
        google.maps.event.addListener(marker, 'click', function() {
          infowindow.open(map,marker);
        });
      }


/*------------ Carousel -----------------*/
/*$(document).ready(function() {

  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
  var slidesPerPage = 4; //globaly define number of elements per page
  var syncedSecondary = true;

  sync1.owlCarousel({
    items : 1,
    slideSpeed : 2000,
    nav: true,
    autoplay: true,
    dots: true,
    loop: true,
    responsiveRefreshRate : 200,
    navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>','<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
  }).on('changed.owl.carousel', syncPosition);

  sync2
    .on('initialized.owl.carousel', function () {
      sync2.find(".owl-item").eq(0).addClass("current");
    })
    .owlCarousel({
    items : slidesPerPage,
    dots: true,
    nav: true,
    smartSpeed: 200,
    slideSpeed : 500,
    slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
    responsiveRefreshRate : 100
  }).on('changed.owl.carousel', syncPosition2);

  function syncPosition(el) {
    //if you set loop to false, you have to restore this next line
    //var current = el.item.index;
    
    //if you disable loop you have to comment this block
    var count = el.item.count-1;
    var current = Math.round(el.item.index - (el.item.count/2) - .5);
    
    if(current < 0) {
      current = count;
    }
    if(current > count) {
      current = 0;
    }
    
    //end block

    sync2
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = sync2.find('.owl-item.active').length - 1;
    var start = sync2.find('.owl-item.active').first().index();
    var end = sync2.find('.owl-item.active').last().index();
    
    if (current > end) {
      sync2.data('owl.carousel').to(current, 100, true);
    }
    if (current < start) {
      sync2.data('owl.carousel').to(current - onscreen, 100, true);
    }
  }
  
  function syncPosition2(el) {
    if(syncedSecondary) {
      var number = el.item.index;
      sync1.data('owl.carousel').to(number, 100, true);
    }
  }
  
  sync2.on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).index();
    sync1.data('owl.carousel').to(number, 300, true);
  });
});*/
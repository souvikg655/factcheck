$(document).ready(function(){
	carousal();
  custompopup();
  uploadFile();
  dropdown();
  toggleMenu();
  lightbox();
  tabs();
});


// Owl Carousal
function carousal() {
  $(".banner-slide").owlCarousel({
    loop:true,
    navigation:true,
    items:1,
    nav: true,
    autoplay:true,
    margin:0,
    animateOut: 'fadeOutDown',
    smartSpeed:3000,
    dots:true,
    responsive:{
      0:{
      items:1,
      }
    }
  });
}


// Custom Popup
function custompopup() {
  var openPopUp = function(event) {
      event.preventDefault();

      var target = $(this).data('target');
      $('.custom-popup').removeClass('is-visible');
      $('.'+target).addClass('is-visible');
    }

    var closePopUp = function(event) {
      event.preventDefault();

      $('.custom-popup').removeClass('is-visible');
    }

    jQuery(document).find(".trigger-popup").bind('click', openPopUp);
    jQuery(".custom-popup-close").bind('click', closePopUp);
}



function dropdown() {
  $(".dropdown > div").hide();
    $(".dropdown").click(function(){
        $(this).children("div").stop(true,true).slideToggle("fast"),
        $(this).toggleClass("dropdown-active");
  });
}


//Upload File For Contact Field
function uploadFile() {
  $("[type=file]").on("change", function(){
    // Name of file and placeholder
    var file = this.files[0].name;
    var dflt = $(this).attr("placeholder");
    if($(this).val()!=""){
      $(this).next().text(file);
    } else {
      $(this).next().text(dflt);
    }
  });
}


// Toggle Menu
function toggleMenu() {
  $('.toggle').on('click', function(){
  $('.toggle').toggleClass('is-clicked');
    if ( $('.header ul, .left-aside').hasClass('show-more') ) {
      $('.header ul, .left-aside').removeClass('show-more');
      $('body').removeClass('overflow-hidden');
    }
    else {
      $('.header ul, .left-aside').addClass('show-more');
      $('body').addClass('overflow-hidden');
    }
  });
}

// Light Box
function lightbox() {
  $('a.btn-gallery').on('click', function(event) {
    event.preventDefault();
    
    var gallery = $(this).attr('href');
    
    $(gallery).magnificPopup({
      delegate: 'a',
      type:'image',
      gallery: {
        enabled: true
      }
    }).magnificPopup('open');
  });
}


// Tab
function tabs() {
  $( "#tabs" ).tabs();
}

$(document).ready(function(){
	carousal();
  loginPopup();
  custompopup();
  uploadFile();
  //customscroll();
  imagepopup();
  dropdown();
});


// Owl Carousal
function carousal() {
  $(".single-slide").owlCarousel({
    loop:false,
    navigation:true,
    items:1,
    autoplay:true,
    margin:0,
    smartSpeed:4000,
    animateOut: 'fadeOut',
    responsive:{
      0:{
      items:1,
      }
    }
  });

  $(".banner-slide").owlCarousel({
    loop:false,
    navigation:true,
    items:1,
    nav: true,
    autoplay:true,
    margin:0,
    smartSpeed:3000,
    responsive:{
      0:{
      items:1,
      }
    }
  });
}


// Login Popup
function loginPopup() {
  // Here we will write a function when link click under class popup           
  $('a.popup').click(function() {                       
    var popupid = $(this).attr('rel');
    $('#' + popupid).fadeIn();
    $('body').append('<div id="fade"></div>');
    $('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); 
    var popuptopmargin = ($('#' + popupid).height() + 10) / 2;
    var popupleftmargin = ($('#' + popupid).width() + 10) / 2;

    $('#' + popupid).css({
    'margin-top' : -popuptopmargin,
    'margin-left' : -popupleftmargin
    });
  });

  $('#fade').click(function() {             
    $('#fade , #popuprel , #popuprel2 , #popuprel3').fadeOut()
    return false;
  });

  $('#close').click(function() {             
    $('#fade , #popuprel , #popuprel2 , #popuprel3').fadeOut()
    return false;
  });

  $('#close2').click(function() {             
    $('#fade , #popuprel , #popuprel2 , #popuprel3').fadeOut()
    return false;
  });

  // Configure/customize these variables.
  var showChar = 0;  // How many characters are shown by default
  var ellipsestext = " ";
  var moretext = "Forgot your password?";
  var lesstext = "Forgot your password?";


  $('.more').each(function() {
      var content = $(this).html();
      if(content.length > showChar) {
          var c = content.substr(0, showChar);
          var h = content.substr(showChar, content.length - showChar);
          var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

          $(this).html(html);
      }

  });

  $(".morelink").click(function(){
      if($(this).hasClass("less")) {
          $(this).removeClass("less");
          $(this).html(moretext);
      } else {
          $(this).addClass("less");
          $(this).html(lesstext);
      }
      $(this).parent().prev().toggle();
      $(this).prev().toggle();
      return false;
  });


  $('.signup-button').click(function(){
    $('#close a img').click();
    $('a[rel=popuprel2]').click();
  })
  $('.signup-button2').click(function(){
    $('#close a img').click();
    $('a[rel=popuprel]').click();
  })
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


// Customscroll
function customscroll() {
  $(".main-panel").mCustomScrollbar({
      autoHideScrollbar:true,
      //scrollbarPosition:"outside"
  }).mCustomScrollbar("scrollTo","bottom",{scrollInertia:0});

}


// Image PopUp
function imagepopup() {
  var $gallery = $('.image-aside a').simpleLightbox();
    $gallery.on('show.simplelightbox', function(){
      console.log('Requested for showing');
    })
    .on('shown.simplelightbox', function(){
      console.log('Shown');
  })
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
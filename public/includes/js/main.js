(function($) {
  "use strict";

//loader fade-in
$('.loading-wrapper').fadeIn(400);

//======= Run on Window Load ============
$(window).load(function(){ 

  //loader and Intro Animations
  $('.projects-list .project-item').each(function(i){
      $(this).addClass("project-item" + (i+1));
  });

  

  var $animaIntro = 0;
  var $animaIntroInterval = 300;

  //page loader fadeOut
 $('#page-loader').delay(400).fadeOut(600, function(){
    $('.hero-slide-wrapper').removeClass('hero-intro');
    $('.cycle-slide-active').addClass('hero-slide-animation');
    $('.hd-logo').removeClass('hd-logo-intro');
    $('.btn-menu').removeClass('btn-menu-intro');
	}); 	

  //Viewport
  var windowHeight = $(window).height();

  function adjustViewport() {
    $('.viewport').css('min-height', windowHeight);
  }
  adjustViewport();

  $(window).resize(function(){
    windowHeight = $(window).height();
    adjustViewport();
  });

  //_____WAYPOINTS
$('#secondary-header').waypoint(function(direction) {
    if (direction === 'down') {
      $('#header').addClass( 'header-stick');
      setTimeout(function(){
        $('#header').addClass( 'header-stick-bg');
      }, 300);      
    }
    else {
      $('#header').removeClass( 'header-stick');
      setTimeout(function(){
        $('#header').removeClass( 'header-stick-bg');        
      }, 300);
    }     
  },
  {
   offset: '-10px'
});

//Cycle
$('#hero-slide').cycle({
  speed: 600,
  timeout: 8000,
  slides: '> div'
});

$('#hero-slide').on('cycle-after', function(){
  $('.hero-slide-item').removeClass('hero-slide-animation');
  $('.cycle-slide-active').addClass('hero-slide-animation');
});


//$('.cycle-slide-active').addClass('hero-slide-animation');


//$('.hero-slide-item').addClass('hero-slide-animation');

  //==============___MASONRY___================
  var $container = $('#blog-itens-container');
  // initialize Masonry after all images have loaded  
  $container.imagesLoaded( function() {
    $container.masonry({
      itemSelector: '.blog-item'
    });
  });

  //==============___CAROUSEL___================
  $("#project-single-carousel").owlCarousel({
     navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,      
      responsiveRefreshRate : 200,
    responsiveBaseWidth: window,
    pagination: true,
    singleItem: true,    
    navigationText: ["<span class='fa fa-chevron-left'></span>","<span class='fa fa-chevron-right'></span>"],     
  });

  $("#about-team").owlCarousel({
     navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,      
      responsiveRefreshRate : 200,
    responsiveBaseWidth: window,
    items : 4,
    itemsMobile : [479,1],
    autoPlay: 6000,
    stopOnHover: true,
    pagination: true,
    //singleItem: true,
    navigationText: ["<span class='fa fa-chevron-left'></span>","<span class='fa fa-chevron-right'></span>"]     
  });

  $("#clients-carousel").owlCarousel({ 
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      items : 4,
      itemsCustom : false,
      itemsDesktop : [1199,4],
      itemsDesktopSmall : [980,3],
      itemsTablet: [768,2],
      itemsMobile : [479,1],
      responsiveRefreshRate : 200,
      responsiveBaseWidth: window,
      navigationText: ["<span class='fa fa-chevron-left'></span>","<span class='fa fa-chevron-right'></span>"],     
        // "singleItem:true" is a shortcut for:
        // items : 1, 
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false   
  });

  //==============___About___================
  var aboutHeight = $('#about-picture').height();
  
  function aboutHeight1() {
    $('#about-text').css('min-height', aboutHeight);
  }

  aboutHeight1();

  $(window).resize(function(){
    var aboutHeight = $('#about-picture').height();
    aboutHeight1();
  });

  //==============___Portfolio Filter___================
  var catActive = '';

  $('#projects-filter-header .category-item').on('click', function(event){
    event.preventDefault();
    var catActive = $(this).attr('data-filter');  
     $('#projects-filter-header .category-item').removeClass('category-item-active'); 
    $(this).addClass('category-item-active');
    $("#projects-filter .project-item").removeClass('project-item-disabled');  
    $("#projects-filter .project-item:not(." + catActive + ")").addClass('project-item-disabled');
  });



});


//==== Run on Document Ready ========
$(document).ready(function(){

//Intro animations
 //$('.projects-list .project-item').addClass('project-item-intro');


//fade between pages
var newLocation = '';

function newpage() {

  window.location = newLocation;

}

$('.click-fade').on('click', function(event)  {

  //$('html').addClass('loader-bg1');

  newLocation = this.href;

  event.preventDefault();
  

  $('body').fadeOut(500, newpage);

}); 

//==============___Menu___================
function showMenu() {
  //$('body').addClass('menu-bg1');
  //$('.content-container').addClass('content-container-open');
  //$('.btn-menu').addClass('btn-menu-active');
  //$('.hd-logo').addClass('hd-logo-active');
  $('.overlay-menu').addClass('overlay-menu-show');
  //$('#header').fadeOut(300);
}

function hideMenu() {
  //$('.content-container').removeClass('content-container-open');
  $('.overlay-menu').removeClass('overlay-menu-show');
  //$('.hd-logo').removeClass('hd-logo-active');
  //$('.btn-menu').removeClass('btn-menu-active');
  //$('#header').fadeIn(100);
  //$('body').removeClass('menu-bg1');
}

$('.btn-menu').on('click', function(event)  {
  showMenu();
});

$('#overlay-close').on('click', function(event)  {
  hideMenu();
});

//==============___SUBMENUS___================
$('.hd-list-menu li ul').hide();


$(".hd-list-menu li").on({
    mouseenter: function () {
        $(this).find('> ul').fadeIn(200);
    },
    mouseleave: function () {
        $(this).find('> ul').fadeOut(200);
    }
});


//==============___Blog hover___================

$('.post-item a').on({
    mouseenter: function () {
      $(this).parents('.post-item').find('a').addClass('onHover');
    },
    mouseleave: function () {
      $(this).parents('.post-item').find('a').removeClass('onHover');
    }
});

//==============___Count To___================
/*Change here the counter's localized in the about page*/

//Finished projects
$('#counter-item-title1').countTo({
    from: 300,
    to: 467,
    speed: 1500,
    refreshInterval: 50,
    onComplete: function(value) {
        console.debug(this);
    }
});

//Happy Customers
$('#counter-item-title2').countTo({
    from: 120,
    to: 168,
    speed: 1500,
    refreshInterval: 50,
    onComplete: function(value) {
        console.debug(this);
    }
});

//Working Hours
$('#counter-item-title3').countTo({
    from: 700,
    to: 785,
    speed: 1500,
    refreshInterval: 50,
    onComplete: function(value) {
        console.debug(this);
    }
});

//Partnerships in the Word
$('#counter-item-title4').countTo({
    from: 700,
    to: 785,
    speed: 1500,
    refreshInterval: 50,
    onComplete: function(value) {
        console.debug(this);
    }
});

//==============___Google Maps Iframe___================
$('.map-overlay').on('click', function () {
    $(this).fadeOut(300);
    $('.map iframe').css("pointer-events", "auto");
});

$('.map').on('mouseleave', function () {
  $('.map-overlay').fadeIn(300);
  $('.map iframe').css("pointer-events", "none");
});

//==============___Contact Form___================
$("#contactError").hide();
$("#contactSuccess").hide();

//Contact Form Validator and Ajax Sender
  $("#contactForm").validate({
    submitHandler: function(form) {
      $.ajax({
        type: "POST",
        url: "php/contact-form.php",
        data: {
          "name": $("#contactForm #name").val(),
          "email": $("#contactForm #email").val(),
          "subject": $("#contactForm #subject").val(),
          "message": $("#contactForm #message").val()
        },
        dataType: "json",
        success: function (data) {
          if (data.response == "success") {
            $("#contactSuccess").fadeIn(300);
            $("#contactError").addClass("hidden");

            $("#contactForm #name, #contactForm #email, #contactForm #subject, #contactForm #message")
              .val("")
              .blur()
              .closest(".control-group")
              .removeClass("success")
              .removeClass("error");              
            
          } else {
            $("#contactError").fadeIn(300);
            $("#contactSuccess").addClass("hidden");
          }
        }

      });
    }
  });

})

})(jQuery);


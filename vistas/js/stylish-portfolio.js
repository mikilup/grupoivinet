(function($) {
  "use strict"; // Start of use strict

  // Closes the sidebar menu
  $(".menu-toggle").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
    $(".menu-toggle > .fa-bars, .menu-toggle > .fa-times").toggleClass("fa-bars fa-times");
    $(this).toggleClass("active");
  });

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });





  // Closes responsive menu when a scroll trigger link is clicked
  //$('#sidebar-wrapper .js-scroll-trigger').click(function() {
  // // $("#sidebar-wrapper").removeClass("active");
   // $(".menu-toggle").removeClass("active");
   // //$(".menu-toggle > .fa-bars, .menu-toggle > .fa-times").toggleClass("fa-bars fa-times");
  //});

  // Scroll to top button appear
  $(document).scroll(function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });

})(jQuery); // End of use strict

// Disable Google Maps scrolling
// See http://stackoverflow.com/a/25904582/1607849
// Disable scroll zooming and bind back the click event
var onMapMouseleaveHandler = function(event) {
  var that = $(this);
  that.on('click', onMapClickHandler);
  that.off('mouseleave', onMapMouseleaveHandler);
  that.find('iframe').css("pointer-events", "none");
}
var onMapClickHandler = function(event) {
  var that = $(this);
  // Disable the click handler until the user leaves the map area
  that.off('click', onMapClickHandler);
  // Enable scrolling zoom
  that.find('iframe').css("pointer-events", "auto");
  // Handle the mouse leave event
  that.on('mouseleave', onMapMouseleaveHandler);
}
// Enable map zooming with mouse scroll when the user clicks the map
$('.map').on('click', onMapClickHandler);




$(document).ready(function(){



  $('.sidebar-nav li:has(ul)').click(function(e){


      e.preventDefault(); 

      

      if($(this).hasClass('active')){


        $(this).removeClass('active'); 
        $(this).children('ul').slideUp(); 


      }else{


        $('.sidebar-nav  li ul').slideUp(); 
        $('.sidebar-nav  li ').removeClass('active');
        $(this).addClass('active'); 
        $(this).children('ul').slideDown();

      }
  });



      $(window).resize(function(){

         // if($(document).width() > 450){

            //$('.sidebar-nav').css({'display':'block'});

         // }

           if($(document).width() < 450){

           // $('.sidebar-nav').css({'display':'none'});
           $('.sidebar-nav  li ul').slideUp(); 
           $('.sidebar-nav  li ').removeClass('active');

          }

      });



$('.sidebar-nav li ul li a').click(function(){
    window.location.href = $(this).attr("href");
  });



});


//--------------TABS DE PRECIOS-------------------------------------$(".tab2").click(function(){


var header = document.getElementById("pills-tab");
var btns = header.getElementsByClassName("tab");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("activo");
  current[0].className = current[0].className.replace(" activo", "");
  this.className += " activo";
  });
}

//CARRUSEL DE PRECIOS//

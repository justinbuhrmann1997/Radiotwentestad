$('.page-scroll a').bind('click', function(event) {
  var $anchor = $(this);
  $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top - 50)
  }, 1250, 'easeInOutExpo');
  event.preventDefault();
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-inverse',
    offset: 51
});

//scrolls controleren voor navbar
$(window).scroll(function changeNav() {
  if($(window).width() >= 989){
    if ($(window).scrollTop() >= 100 ) {
      $('#navbar').removeClass("navbar-in").addClass("navbar-out");
    } else {
      $('#navbar').removeClass("navbar-out").addClass("navbar-in");
    }
}
});

$(document).ready(function(){
  $('.navbar-nav>li>a').on('click', function(){
    $('.navbar-collapse').collapse('hide');
  });
  $('.navbar-brand').on('click', function(){
    $('.navbar-collapse').collapse('hide');
  });
});
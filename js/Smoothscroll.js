$(document).ready(function(){
  if(!$(window).width() >= 989){
    $('#navbar').css('background', 'rgb(255, 120, 96)');
  }
  else{
    $('#navbar').css('background', 'none');  
  }
});

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
$(window).scroll(function() {

  if($(window).width() >= 989){
  if ($(window).scrollTop() >= 200 ) {
      $('#navbar').css('background', 'rgb(255, 120, 96)');

  } else {
      $('#navbar').css('background', 'none');
      $('#navbar').css('transition', 'ease .5s');
  }
}
else{
  $('#navbar').css('background', 'rgb(255, 120, 96)');
}
});
$(function() {
    $('.scroll-down').click (function() {
      $('html, body').animate({scrollTop: $('div.scrolled').offset().top }, 'slow');
      return false;
    });
  });
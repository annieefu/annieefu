$(function() {
    $('.scroll-down').click (function() {
      $('html, body').animate({scrollTop: $('section.scrolled').offset().top }, 'slow');
      return false;
    });
  });
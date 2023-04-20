$(window).on('load', function() { // makes sure the whole site is loaded
    var status = $('#status');
    var preloader = $('#preloader');
    var body = $('body');
    status.fadeOut(); // will first fade out the loading animation
    preloader.delay(0).fadeOut('fast'); // will fade out the white DIV that covers the website.
  })

$(document).ready(
  function() {
    /*Responsive menu*/
    $('.burger').sidr({
      source: '#main-nav',
      displace: false,
      name: 'sidr-main',
    });

    $('body').click(
      function() {
        $.sidr('close', 'sidr-main');
      });

    /*Carousel*/
    $(".owl-carousel").owlCarousel({
      items: 1,
      loop: true,
      nav: true,
      dots: false,
      navText: ['Précedent', 'Suivant'],
    });
  });

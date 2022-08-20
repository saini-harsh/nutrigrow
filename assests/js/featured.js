$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    items: 3,
    margin: 20,
    loop: true,
    autoplay: true,
    autoplayTimeout: 2500,
    responsiveClass: true,
    dots: false,
    nav: true,
    responsive: {
      0: {
        items: 1,
        nav: false,
      },
      600: {
        items: 2,
        nav: false,
      },
      1200: {
        items: 4,
        loop: true,
      },
    },
  });
});

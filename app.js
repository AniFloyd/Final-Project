// OWL
$('.owl-carousel').owlCarousel({
    loop: true,
    margin:150,
    autoplay: true,
    autoplayTimeout: 2000,
    nav: false,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
  })
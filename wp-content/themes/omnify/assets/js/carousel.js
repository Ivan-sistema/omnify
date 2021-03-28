var $ = jQuery.noConflict();

$(document).ready(function(e){

/*=============CAROUSEL CASES==================*/
var owlcases = $('.owl-carousel-cases');
owlcases.owlCarousel({
  loop:true,
  margin:10,
  responsiveClass:true,
  dotsSpeed:true,
  responsive: {
                  0: {
                    items: 1,
                    nav:true
                  },
                  600: {
                    items: 1,
                    nav:true
                  },
                  960: {
                    items: 1,
                    nav:true
                  },
                  1200: {
                    items: 1,
                    nav:true
                  }
                }
});
   owlcases.on('.owl-stage' , 'mousewheel', function(e) {
                if (e.deltaY > 0) {
                  owlcases.trigger('next.owl');
                } else {
                  owlcases.trigger('prev.owl');
                }
                e.preventDefault();
              }); 


/*=============CAROUSEL TESTIMONIALS==================*/
var owltestimonial = $('.owl-carousel-testimonial');
owltestimonial.owlCarousel({
  loop:true,
  margin:10,
  responsiveClass:true,
  dotsSpeed:true,
  responsive: {
                  0: {
                    items: 1,
                    nav:true
                  },
                  600: {
                    items: 1,
                    nav:true
                  },
                  960: {
                    items: 1,
                    nav:true
                  },
                  1200: {
                    items: 1,
                    nav:true
                  }
                }
});
   owltestimonial.on('.owl-stage' , 'mousewheel', function(e) {
                if (e.deltaY > 0) {
                  owltestimonial.trigger('next.owl');
                } else {
                  owltestimonial.trigger('prev.owl');
                }
                e.preventDefault();
              }); 



});
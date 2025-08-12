
// services silder code
var swiper = new Swiper(".servicesSwiper", {
    slidesPerView: 2,
    // centeredSlides: true,
    spaceBetween: 20,
    grabCursor: true,
    navigation: {
        nextEl: ".next",
        prevEl: ".prev",
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 10,
        }
    }
});


// projects silder code
const projectSwiper = new Swiper(".ProjectSwiper", {
    slidesPerView: 3.5,
    spaceBetween: 15,
    centeredSlides: true,
    // loop: true,
    // freeMode: true,
    navigation: {
        nextEl: ".projectprev",
        prevEl: ".projectnext"
    }
});


// testimonial silder code 

 var $swiper = jQuery(".testimonialSwiper");
  var $bottomSlide = null; // Slide whose content gets 'extracted' and placed
  // into a fixed position for animation purposes
  var $bottomSlideContent = null;

  var swiper = new Swiper(".testimonialSwiper", {
    //   slidesPerView: "auto",
    //   spaceBetween: 25,
    //   centeredSlides: true,
    //     // loop: true,
    // //   freeMode: true,

        spaceBetween: 1,
    slidesPerView: 3.5,
    centeredSlides: true,
    roundLengths: true,
    loop: true,
    loopAdditionalSlides: 30,

//   });
    });
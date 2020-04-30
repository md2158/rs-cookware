$(document).ready(function ($) {
    // Slider - Products Advantages
    var advSwiper = new Swiper('#productAdvantages', {
        // spaceBetween: 30,
        pagination: {
            el: '#productAdvantagesPag',
            clickable: true
        }
    });
    var newsSwiper = new Swiper('#productsSlider', {
        slidesPerView: 4,
        spaceBetween: 70,
        loop:true,
        navigation: {
          nextEl: '#productsSliderNext',
          prevEl: '#productsSliderPrev',
        },
        breakpoints: {
            1200: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
            992: {
              slidesPerView: 3,
              spaceBetween: 30,
            },
            767: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            320: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
            // 640: {
            //   slidesPerView: 3,
            //   spaceBetween: 15,
            // },
            // 320: {
            //   slidesPerView: 2,
            //   spaceBetween: 15,
            // }
        },
    });
});
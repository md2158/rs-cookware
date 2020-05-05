$(document).ready(function ($) {
    // Slider - Products
    if($('#productSlider').length){
        var swiper = new Swiper('#productSlider', {
            slidesPerView: 4,
            spaceBetween: 30,
            pagination: {
              el: '#productSliderPag',
              dynamicBullets: true,
              clickable: true,
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
    }
});
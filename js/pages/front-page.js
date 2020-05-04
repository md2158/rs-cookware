$(document).ready(function ($) {
    // Slider - Products
    if($('#productSlider').length){
        var swiper = new Swiper('#productSlider', {
            slidesPerView: 4,
            spaceBetween: 30,
            pagination: {
              el: '#productSliderPag',
              dynamicBullets: true,
            },
        });
    }
});
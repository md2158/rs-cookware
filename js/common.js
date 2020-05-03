$(document).ready(function ($) {
    $("#searchModalBtn").click(function(){
        $(this).find('.icon').toggleClass('icon-search icon-cross');
        $('#searchModal').toggleClass('view');
    });

    var stickyNavTop = $('.rs-cookware-header').offset().top;
    var stickyNav = function(){
        var scrollTop = $(window).scrollTop(); 
        if (scrollTop > 50) { 
            $('.rs-cookware-header').addClass('menu-scroll');
        } else {
            $('.rs-cookware-header').removeClass('menu-scroll'); 
        }
    };
    stickyNav();
    $(window).scroll(function() {
        stickyNav();
    });

    // Mobile menu list
    if ($(window).width() < 992) {
        // var menu = '';
        // $( ".rs-lowence-header__menu" ).each(function() {
        //     // console.log(menu);
        //     menu += $(this).html();
        // });
        // $('#mobileMenuModal .modal-content').html(menu);
        // $('.rs-lowence-header__menu').html('');
        // $('#mobileMenuModal').on('hide.bs.modal', function (e) {
        //     $('#mobileMenuBtn').removeClass('active');
        //     $('#mobileMenuBtn .animated-menu-icon').removeClass('open');
        // })
    };
});

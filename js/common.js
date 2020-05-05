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
    // Mobile Menu
    $('#mobileMenuBtn').click(function(){
        $(this).toggleClass('active');
        $(this).find('.animated-menu-icon').toggleClass('open');
        $('.rs-quartet-header__menu').toggleClass('active');
    });

    // Mobile menu list
    if ($(window).width() < 768) {
        $('.rs-cookware-header__menu').addClass('collapse');
        $('.rs-cookware-header__menu').attr('id', 'collapseMenu');
        $('.sub-menu-parent').click(function(){
            $(this).toggleClass('active');
            $(this).find('.sub-menu').toggleClass('show');
        });
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

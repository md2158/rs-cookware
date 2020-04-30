// function linkHover(linkClass) {
//     $('.'+linkClass).mouseenter(function(){
//         // $('.'+linkClass).css('opacity', '0.5');
//         $('.'+linkClass).addClass('non-active');
//         $(this).removeClass('non-active');
//         $(this).addClass('active');
//     });
//     $('.'+linkClass).mouseleave(function(){
//         $('.'+linkClass).removeClass('non-active');
//     });
// }

// Mobile menu with child function
// function menuWithChild(parentMenu, childMenu) {
//     $('.'+parentMenu).click(function(){
//         $('.'+parentMenu).toggleClass('active');
//         $('.'+childMenu).toggleClass('d-block');
//     });
//     $('.'+parentMenu).parent().siblings().click(function(){
//         $('.'+childMenu).removeClass('d-block');
//         $('.'+parentMenu).removeClass('active');
//     });
// }

$(document).ready(function ($) {
    // menu hover effect
    // linkHover('menu-nav__item');
    // linkHover('menu-nav__submenu_item');
    // linkHover('menu-nav__submenu-child_link');
    
    // Mobile Menu
    // $('#mobileMenuBtn').click(function(){
    //     $(this).toggleClass('active');
    //     $(this).find('.animated-menu-icon').toggleClass('open');
    //     $('.rs-quartet-header__menu').toggleClass('active');
    // });

    // if ($(window).width() < 1200) {
    //     menuWithChild('menu-nav__link_has-child','menu-nav__submenu');
    //     menuWithChild('menu-nav__submenu_has-child','menu-nav__submenu-child');
    // }
    $("#openSearchModal").click(function(){
        $('#searchModal').addClass('show');
        setTimeout(function(){
            $('#searchModal').addClass('active');
            $('#searchModal input').focus();
        }, 100);
    });
    $("#closeSearchModal").click(function(){
        $('#searchModal').removeClass('active');
        setTimeout(function(){
            $('#searchModal').removeClass('show');
        }, 500);
    });
    // Mobile Menu
    $('#mobileMenuBtn').click(function(){
        $(this).toggleClass('active');
        $(this).find('.animated-menu-icon').toggleClass('open');
        $('.rs-quartet-header__menu').toggleClass('active');
    });
    // Mobile menu list
    if ($(window).width() < 992) {
        var menu = '';
        $( ".rs-lowence-header__menu" ).each(function() {
            // console.log(menu);
            menu += $(this).html();
        });
        $('#mobileMenuModal .modal-content').html(menu);
        $('.rs-lowence-header__menu').html('');
        $('#mobileMenuModal').on('hide.bs.modal', function (e) {
            $('#mobileMenuBtn').removeClass('active');
            $('#mobileMenuBtn .animated-menu-icon').removeClass('open');
        })
    };
});

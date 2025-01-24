jQuery(document).ready(function ($) {
    const mainHeaderMenu = $('.main-header_menu');

    if (mainHeaderMenu.attr('data-preset-active')) return;

    if ($(document).scrollTop())
        mainHeaderMenu.addClass('main-header_menu--active');

    $('#mobile-menu_btn').click(() => {
        $('#mobile-menu').fadeToggle(150);
    });

    //Accardion toggle in mobile menu

    $('.parent-menu-item').each(function () {
        $(this).on('click', function () {
            $(this).children('ul').slideToggle(200);
        });
    });

    //Header nav active on scroll

    $(document).on('scroll', (e) => {
        if ($(document).scrollTop()) {
            return mainHeaderMenu.addClass('main-header_menu--active');
        }
        mainHeaderMenu.removeClass('main-header_menu--active');
    });
});

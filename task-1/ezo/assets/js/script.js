jQuery(document).ready(function ($) {

    // opening and closing of hamburger menu
    $('.header-menu i').on('click', function () {
        var nav = $(this).siblings('nav');
        nav.toggleClass('open');
        $('body').toggleClass('overflow-hidden');
        $(this).toggleClass('fa-bars fa-xmark');
    });

});

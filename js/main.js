$(function(){
    // hamberger menu
    $(".header-hamberger").click(function(){
        $('.sp-menu-drawer').toggleClass('is-active');
    });

    $('.sp-menu-nav-item, .sp-menu-header-closebtn').click(function(){
        $(".sp-menu-drawer").removeClass('is-active');
    });

    // footer > sp-dropdown-menu
    $(".footer-nav-item--dropdown").click(function(){
        $('.footer-nav-dropdown-list').slideToggle();
        $(".footer-nav-item--dropdown").toggleClass('is-active');
    });

    // top > top-kv > slick.js
    $(".top-kv-slider").slick({
        dots: true,
        autoplay: true,
        autoplaySpeed: 4000,
        easing: 'swing',
        useCSS: false,
    });
});


$(function(){
    // hamberger menu
    $(".header-hamberger").click(function(){
        $('.sp-menu-drawer').toggleClass('is-active');
    });

    $('.sp-menu-nav-item, .sp-menu-header-closebtn').click(function(){
        $(".sp-menu-drawer").removeClass('is-active');
    });

    // footer > sp-dropdown-menu
    const smallDevice = window.matchMedia("(max-width: 959px)");
    smallDevice.addListener(handleDeviceChange);
    function handleDeviceChange(e) {
        if (e.matches) {
            $(".footer-nav-item--dropdown").click(function(){
                $('.footer-nav-dropdown-list').slideToggle();
                $(".footer-nav-item--dropdown").toggleClass('is-active');
            });
            $('.footer-nav-dropdown-list').css('display','none');
        } else {
            $(".footer-nav-item--dropdown").off('click');
            $('.footer-nav-dropdown-list').css('display','block');
        }
    }
    handleDeviceChange(smallDevice);

    // top > top-kv > slick.js
    $(".top-kv-slider").slick({
        dots: true,
        autoplay: true,
        autoplaySpeed: 4000,
        easing: 'swing',
        useCSS: false,
    });
});


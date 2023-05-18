$(function(){
    // hamberger menu
    $(".header-hamberger").on('click', () => {
        $('.sp-menu-drawer').toggleClass('is-active');
    });

    $('.sp-menu-nav-item, .sp-menu-header-closebtn').on('click', () => {
        $(".sp-menu-drawer").removeClass('is-active');
    });

    // footer > sp-dropdown-menu
    const mediaQueryList = window.matchMedia('(max-width: 959px)');
    const listener = (event) => {
        if (event.matches) {
            $(".footer-nav-item--dropdown").on('click', () => {
                $('.footer-nav-dropdown-list').slideToggle();
                $(".footer-nav-item--dropdown").toggleClass('is-active');
            });
            $('.footer-nav-dropdown-list').css('display','none');
        } else {
            $(".footer-nav-item--dropdown").off('click');
            $('.footer-nav-dropdown-list').css('display','block');
        }
    };
    mediaQueryList.addEventListener("change", listener);
    listener(mediaQueryList);

    // top > top-kv > slick.js
    $(".top-kv-slider").slick({
        dots: true,
        autoplay: true,
        autoplaySpeed: 4000,
        easing: 'swing',
        useCSS: false,
    });
});


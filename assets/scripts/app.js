$(window).scroll(function () {
    var scrollPosition = $(this).scrollTop();
    if (scrollPosition >= 34) {
        $('body').addClass('sticky');
    } else {
        $('body').removeClass('sticky');
    }
});

$(document).ready(function () {
    $('#toggleMenu').click(function () {
        $('body').toggleClass('open-site-nav');
    });
    $('#closeMenu').click(function () {
        $('body').removeClass('open-site-nav');
    });
});

//window.onload = function() {
//
//    function getScrollTop() {
//        if (typeof window.pageYOffset !== 'undefined' ) {
//            // Most browsers
//            return window.pageYOffset;
//        }
//
//        var d = document.documentElement;
//        if (d.clientHeight) {
//            // IE in standards mode
//            return d.scrollTop;
//        }
//
//        // IE in quirks mode
//        return document.body.scrollTop;
//    }
//
//    window.onscroll = function() {
//        var toc = document.getElementById('toc'),
//            scroll = getScrollTop();
//
//        if (scroll <= 28) {
//            toc.style.top = "30px";
//        }
//        else {
//            toc.style.top = (scroll + 2) + "px";
//        }
//    };
//
//};
$(window).scroll(function () {
    scrollPosition = $(this).scrollTop();
    if (scrollPosition >= 1) {
        $('body').addClass('sticky');
    } else {
        $('body').removeClass('sticky');
    }
});
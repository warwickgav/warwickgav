
(function($){

    $(window).scroll(function () {
        var scrollPosition = $(this).scrollTop();
        if (scrollPosition >= 34) {
            $('body').addClass('sticky');
        } else {
            $('body').removeClass('sticky');
        }
    });

    $('#toggleMenu').click(function () {
        $('body').toggleClass('open-site-nav');
    });
    $('#closeMenu').click(function () {
        $('body').removeClass('open-site-nav');
    });



})(jQuery);


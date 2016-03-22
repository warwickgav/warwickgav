$(window).scroll(function () {
    var scrollPosition = $(this).scrollTop();
    if (scrollPosition >= 34) {
        $('body').addClass('sticky');
    } else {
        $('body').removeClass('sticky');
    }
});

$(document).ready(function(){
    $('a[href^="#"]').on('click',function (e) {

        $('body').removeClass('open-site-nav');
        e.preventDefault();

        var target = this.hash,
            $target = $(target);

        var targetOffset = $target.offset().top - $("header").outerHeight(true) - 40;

        $('html, body').stop().animate({
            'scrollTop': targetOffset
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });

    $('#toggleMenu').click(function () {
        $('body').toggleClass('open-site-nav');
    });
    $('#closeMenu').click(function () {
        $('body').removeClass('open-site-nav');
    });

    $(".fancybox").fancybox({
        openEffect	: 'none',
        closeEffect	: 'none'
    });

});




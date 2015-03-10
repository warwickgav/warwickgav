$(window).scroll(function () {
    scrollPosition = $(this).scrollTop();
    if (scrollPosition >= 34) {
        $('body').addClass('sticky');
    } else {
        $('body').removeClass('sticky');
    }
});

$(document).ready(function(){

    $('.menu-trigger').click(function(){
        $('body').toggleClass('show-menu');
    });

});
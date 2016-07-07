
function shift() {
    var $window = $(window);
    var activeSlideID = $('.slide.expanded').attr('data-id');
    var inactiveSlideWidth = 320;
    var activeSlideWidth = $('.slide.expanded').width();
    var viewportWidth = $window.outerWidth();
    var attrID = activeSlideID - 1;
    var totalPanelWidth = attrID * inactiveSlideWidth;
    var windowCentre = (activeSlideWidth/2) + totalPanelWidth;
    var initialCentre = (viewportWidth - activeSlideWidth) / 2;
    var shiftPanel = (viewportWidth/2) - windowCentre - initialCentre;

    $("#slider > div").filter(function(){
        if  ($(this).attr("data-id") > activeSlideID) {
            $(this).removeClass('right');
            $(this).addClass('left');
        } else if ($(this).attr("data-id") < activeSlideID) {
            $(this).removeClass('left');
            $(this).addClass('right');
        }
    });
    if (shiftPanel < 0) {
        if (shiftPanel < -1529.5) {
            $('.slide').parent().css('transform', 'translateX(-1519.5px)');
        } else {
            $('.slide').parent().css('transform', 'translateX('+ shiftPanel +'px)');
        }
    } else {
        $('.slide').parent().css('transform', 'translateX(0px)');
    }
}

(function($){

    var $window = $(window);

    function checkWidth() {

        var windowsize = $window.width();

        if (windowsize < 960) {
            $('#slider').css('transform', 'translateX(0px)').css('padding-left', '0px');

            //$('.slide').removeClass('expanded');

        } else if (windowsize >= 960) {
            //var $window = $(window);
            var viewport = $window.outerWidth();
            var activeSlide = $('.slide.expanded').width();
            var initialCentre = (viewport - activeSlide) / 2;

            $('#slider').css('padding-left', ' ' + initialCentre + 'px');

            var $first = $('.slide:first', '#slider'),
                $last = $('.slide:last', '#slider');

            //$first.addClass('expanded');

            $("#next").click(function () {
                var $next,
                    $selected = $('.expanded');
                // get the selected item
                // If next li is empty , get the first
                $next = $selected.next('.slide').length ? $selected.next('.slide') : $first;
                $selected.removeClass('expanded');
                $next.addClass('expanded');
                shift();
            });

            $("#prev").click(function () {
                var $prev,
                    $selected = $('.expanded');
                // get the selected item
                // If prev li is empty , get the last
                $prev = $selected.prev('.slide').length ? $selected.prev('.slide') : $last;
                $selected.removeClass('expanded');
                $prev.addClass('expanded');
                shift();
            });

            $('.slide').click(function () {
                var $activeSlide = $('.slide.expanded');
                $activeSlide.removeClass('expanded');
                $(this).addClass('expanded');
                shift();
            });
        }
    }


    $window.resize(checkWidth);
    checkWidth();


})(jQuery);
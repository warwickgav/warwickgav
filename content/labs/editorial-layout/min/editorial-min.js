function shift(){var e=$(window),s=$(".slide.expanded").attr("data-id"),d=320,t=$(".slide.expanded").width(),a=e.outerWidth(),i=s-1,r=i*d,n=t/2+r,l=(a-t)/2,p=a/2-n-l;$("#slider > div").filter(function(){$(this).attr("data-id")>s?($(this).removeClass("right"),$(this).addClass("left")):$(this).attr("data-id")<s&&($(this).removeClass("left"),$(this).addClass("right"))}),0>p?-1529.5>p?$(".slide").parent().css("transform","translateX(-1519.5px)"):$(".slide").parent().css("transform","translateX("+p+"px)"):$(".slide").parent().css("transform","translateX(0px)")}!function($){function e(){var e=s.width();if(960>e)$("#slider").css("transform","translateX(0px)").css("padding-left","0px");else if(e>=960){var d=s.outerWidth(),t=$(".slide.expanded").width(),a=(d-t)/2;$("#slider").css("padding-left"," "+a+"px");var i=$(".slide:first","#slider"),r=$(".slide:last","#slider");$("#next").click(function(){var e,s=$(".expanded");e=s.next(".slide").length?s.next(".slide"):i,s.removeClass("expanded"),e.addClass("expanded"),shift()}),$("#prev").click(function(){var e,s=$(".expanded");e=s.prev(".slide").length?s.prev(".slide"):r,s.removeClass("expanded"),e.addClass("expanded"),shift()}),$(".slide").click(function(){var e=$(".slide.expanded");e.removeClass("expanded"),$(this).addClass("expanded"),shift()})}}var s=$(window);s.resize(e),e()}(jQuery);
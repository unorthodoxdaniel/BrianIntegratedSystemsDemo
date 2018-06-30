//  $(document).on("scroll", function () {
//      var pageTop = $(document).scrollTop()
//      var pageBottom = pageTop + $(window).height()
//      var tags = $(".box")
  
//        if ($(tag).position().top < pageBottom) {
//          $(tag).fadeIn();
//        } else {
//          $(tag).fadeOut();
//        }
//   });

$("#headernavbar").fadeIn(1000);
$(".headerimg").fadeIn(2000);
$('.hideme').css("opacity","0");
$(document).ready(function() {

    /* Every time the window is scrolled ... */
    $(window).scroll( function(){

        /* Check the location of each desired element */
        $('.hideme').each( function(i){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight() * 0.5;
                // + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object){
                if($(this).css("opacity") == 0)
                    $(this).animate({'opacity':'1'},500);

            } else{
                if($(this).css("opacity") == 1)
                {
                    $(this).animate({'opacity':'0'},300);
                }}

        });

    });

});
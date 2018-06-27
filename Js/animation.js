 $(document).on("scroll", function () {
     var pageTop = $(document).scrollTop()
     var pageBottom = pageTop + $(window).height()
     var tags = $(".box")
  
       if ($(tag).position().top < pageBottom) {
         $(tag).fadeIn();
       } else {
         $(tag).fadeOut();
       }
  });
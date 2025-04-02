jQuery.noConflict();
 
(function($) {



    $(".bt-menu").on("click", function(){ 
        $("nav").toggleClass("nav-open");
    })

    $(".encontro-title").on("click", function(){ 
        const content = $(this).siblings(".unidade-encontro-content");
        
        if (content.is(":visible")) {
            content.stop().animate({ height: "toggle" }, 1000, "linear");
        } else {
            content.stop().animate({ height: "toggle" }, 1000, "linear");
        }
    
        $(this).toggleClass("open");
    });



})(jQuery);
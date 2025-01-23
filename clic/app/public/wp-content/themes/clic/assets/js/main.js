jQuery.noConflict();
 
(function($) {



    $(".bt-menu").on("click", function(){ 
        $("nav").toggleClass("nav-open");
    })

    $(".unidade-encontro-title").on("click", function(){ 
        $(this).siblings(".unidade-encontro-content").slideToggle();
    })



})(jQuery);
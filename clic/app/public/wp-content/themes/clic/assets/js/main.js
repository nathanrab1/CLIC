jQuery.noConflict();
 
(function($) {



    $(".bt-menu").on("click", function(){ 
        console.log("Hello world");
        $("nav").toggleClass("nav-open");
    })



})(jQuery);
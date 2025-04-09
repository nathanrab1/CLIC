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

    jQuery(document).ready(function($) {
        $('.filtro-categoria').on('change', function() {
          var filtro = $(this).val();
          
          if (filtro === 'todos') {
            $('.item-filtro').show();
          } else {
            $('.item-filtro').hide();
            $('.item-filtro[disciplina="' +  filtro + '"]').show();
          }
        });
      });

      


})(jQuery);
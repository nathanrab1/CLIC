jQuery.noConflict();
 
(function($) {
  function checkVisibility() {
      $('.anima').each(function() {
          var elementTop = $(this).offset().top;
          var elementBottom = elementTop + $(this).outerHeight();
          var viewportTop = $(window).scrollTop();
          var viewportBottom = viewportTop + $(window).height();

          if (elementBottom > viewportTop && elementTop < viewportBottom) {
              $(this).addClass('active');
          } else {
              // $(this).removeClass('active');
          }
      });
  }

  // Verifica a visibilidade ao carregar a página e ao rolar
  $(window).on('scroll resize', checkVisibility);
  checkVisibility();
  
  function checkWidth() {
      var windowWidth = $(window).width();

      if (windowWidth < 990) {
          // Ações para tamanhos menores que 990px
          console.log("Menor que 990px");
          // Adicione suas ações aqui

          //abre o filtro
          $('.bt-filtro').on('click', function() {
            $(this).find('~ form[data-sf-form-id]').slideToggle(500)
            $(this).toggleClass('open')
          })

          //abre os submenus
          $('.menu .bt-open').on('click', function() {
            $(this).find('~ ul').slideToggle(500)
            $(this).toggleClass('open')
          })

          //abre o menu
          $('.bt-menu').on('click', function() {
              $('header').toggleClass('open');
              $('.menu').slideToggle(500);
              $('body').toggleClass('fixed');
          })

      } else {
          // Ações para tamanhos maiores que 990px
          console.log("Maior ou igual a 990px");
          // Adicione suas ações aqui

          //abre os submenus
          $('.menu .bt-open').on('click', function() {
              // if ($(this).is('h1')) {
              //     $(this).closest('.tier-1-menu').siblings('.tier-1-menu').find('.tier-2-menu').slideUp();
              //     $('h1.bt-open').removeClass('open');
              //     $(this).find('~ ul').slideToggle(500)
              //     $(this).toggleClass('open')
              // } else {
                  $('.menu .tier-3-menu').slideUp();
                  $(this).find('~ ul').slideToggle(500);
                  $(this).toggleClass('open');
              // }

              
          });
      }
  }

  // Executa na carga da página
  checkWidth();

  // Executa ao redimensionar a janela
  $(window).resize(checkWidth);

  //carrossel topo
  $('.carousel').owlCarousel({
      loop: true,
      nav: false,
      items: 1,
      autoplay: true,
  });

  //carrossel topo
  $('.carousel-convidades').owlCarousel({
      loop: true,
      nav: false,
      items: 1,
      autoplay: true,
      responsive : {
          990 : {
              items: 3,
          },
      }
  });

  //acordeon programacao
  $('.topo-acord').on('click', function() {
    $(this).toggleClass('open')
    $(this).find('~ ul').slideToggle(500)  
    
  })

  //Altera cor e texto da pagina de Convidades
  function changeColorBasedOnUrl() {
      const urlParams = new URLSearchParams(window.location.search);
      const activity = urlParams.get('_sfm_atividade');
      const element = $('.color-bg-change');

      switch (activity) {
          case 'seminarios':
              element.css('background-color', '#E61365');
              break;
          case 'mostra':
              element.css('background-color', '#F07D22');
              break;
          case 'labs':
              element.css('background-color', '#13A1CA');
              break;
          case 'mercado':
              element.css('background-color', '#FFED00');
              break;
          default:
              element.css('background-color', '#CFCFCF');
      }
  }

  // Call the function on page load
  $(document).ready(function() {
      changeColorBasedOnUrl();
  });

  // Periodically check for URL changes
   let lastUrl = location.href;
   setInterval(function() {
       if (location.href !== lastUrl) {
           lastUrl = location.href;
           changeColorBasedOnUrl();
       }
   }, 500); // Check every 500 milliseconds

})(jQuery);
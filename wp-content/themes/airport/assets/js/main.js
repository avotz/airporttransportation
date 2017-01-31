;(function($){

  var btnMenu = $('#btn-menu'),
      menu = $('.header__menu');
     



      btnMenu.on('click', function(){

          menu.toggle();
          $(this).toggleClass('header__btn-menu--active');

      });

    $(".chosen-select").chosen();
    
    //SCROLL WINDOW FUNCTIONALITY

    $(window).scroll(function () {
          if ($(this).scrollTop() > 50) {
              $('.header').addClass("header--fixed");
          } else {
              $('.header').removeClass("header--fixed");
          }
      });





})(jQuery);

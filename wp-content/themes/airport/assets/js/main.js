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

  $('.btn-book-transfer').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function() {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');
            },
            beforeClose: function() {

               
                $('body').removeClass('mfp-open');
            }

        }

       
    });
$form_transfer = $('.transfer-popup form');

 $('.btn-book-transfer').on('click', function(){
          
          $table = $(this).parents('.table');

          if($table.hasClass('table-sj'))
          {
            $form_transfer.find('select[name="from"]').val('San Jose Airport');
          }else{
            $form_transfer.find('select[name="from"]').val('Liberia Airport');
          }
          //$form_transfer.find('select[name="destination"] option[value="'+ $(this).data('title') +'"]').attr("selected",'selected');
          $form_transfer.find('select[name="destination"]').val($(this).data('title'));

      });

    
    $(".datepicker").pickadate({
        //closeOnSelect: true,
        format: 'yyyy-mm-dd'
    });


})(jQuery);

  $(window).scroll( function() {
    if($(this).scrollTop() > $('.header-box').height()/4) {
        $(".head img").hide(1000);
      } else {
        $(".head img").show(1000);
      }
 } );

//$('.header-box').height()
 
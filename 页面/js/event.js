$(window).scroll( function() {
    if($(this).scrollTop() > $('.header-box').height()) {
        $(".head img").hide(1000);
        $(".body").attr("padding-top","450px !important")
      } else {
        $(".head img").show(1000);
        $(".body").attr("padding-top","300px !important")
      }
 } );
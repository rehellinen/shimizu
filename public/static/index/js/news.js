$(window).scroll( function() {
    if($(this).scrollTop() > $('.header-box').height()) {
        $(".head img").hide(1000);
        
        $(".banner").addClass("scrolled");
       
      } else {
        $(".head img").show(1000);
        
        $(".banner").removeClass("scrolled");
        
      }
 } );
    //Reset the scroll after refreshing the page
    history.scrollRestoration = "manual";

    $(window).on('beforeunload', function(){
          $(window).scrollTop(0);
  
    });
  //Pre-loader
  $(window).on("load",function(){
    $(".absCenter").fadeOut("slow");
  });
  //While loading...
  $(window).load(function(){
    $(body, html).addClass('hideMyScroll');
  });
  $(document).ready(function(){
    $(body, html).removeClass('hideMyScroll');
  });
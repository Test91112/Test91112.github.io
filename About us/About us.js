//Scrolling
$(window).ready(function() {
  $(".icons").fadeTo(500,0);
    $(window).scroll(function() {
      var windowBottom = $(this).scrollTop() + $(this).innerHeight();
      $(".icons").each(function() {
        /* Check the location of each desired element */
        var objectBottom = $(this).offset().top + $(this).outerHeight() - 100;
        
        /* If the element is completely within bounds of the window, fade it in */
        if (objectBottom < windowBottom) 
        { //object comes into view (scrolling down)
          if ($(this).css("opacity")==0) {$(this).fadeTo(500,1);}
        } 
      });
    }).scroll(); //invoke scroll-handler on page-load
  });
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
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
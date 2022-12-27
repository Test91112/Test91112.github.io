var addtocartbuttonCatafast = document.getElementById("addtocartbtn_Catafast");
var addtocartbuttonAugmentin = document.getElementById("addtocartbtn_Augmentin");
var addtocartbuttonCataflam = document.getElementById("addtocartbtn_Cataflam");
var addtocartbuttonStimulan = document.getElementById("addtocartbtn_Stimulan");
var addtocartbuttonOxaleptal = document.getElementById("addtocartbtn_Oxaleptal");
var addtocartbuttonCymbatex = document.getElementById("addtocartbtn_Cymbatex");
var addtocartbuttonCitra = document.getElementById("addtocartbtn_Citra");
function myFunction() {
    var input = document.getElementById("Search");
    var filter = input.value.toLowerCase();
    var C1 = document.getElementsByClassName('FirstColumn');
    var C2 = document.getElementsByClassName('SecondColumn');
  
    for (i = 0; i < C1.length; i++) {
      if (C1[i].innerText.toLowerCase().includes(filter)) {
        C1[i].style.display = "block";
      } else {
        C1[i].style.display = "none";
      }
    }
    for (i = 0; i < C2.length; i++) {
        if (C2[i].innerText.toLowerCase().includes(filter)) {
          C2[i].style.display = "block";
        } else {
          C2[i].style.display = "none";
        }
      }
  }
  function MYrange() {
    var r1 = document.getElementById("PriceFrom");
    var r2 = document.getElementById("PriceTo");
    var C1 = document.getElementsByClassName('range');
    var C2 = document.getElementsByClassName('range');
    var a= parseInt(C1);
    var b=parseInt(C2);
    var c= document.getElementsByClassName('FirstColumn');
    var c3=document.getElementsByClassName('SecondColumn');
      for(i=0;i<C1.length;i++)
      {
      if (a<=r1 && r2>=a) {
        c[i].style.display = "block";
      } else {
        c[i].style.display = "none";
      }
    }
    for (i = 0; i < C2.length; i++) {
        if (b>=r1 && r2<=b) {
          c3[i].style.display = "block";
        } else {
          c3[i].style.display = "none";
        }
      }
  }
function DropDown() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  function MyBrands() {
    document.getElementById("myBrands").classList.toggle("show");
  }
  function MyPrice() {
    document.getElementById("myPrice").classList.toggle("show");
  }
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
  //Shop
$(document).ready(function(){
    $("#negative_Catafast").hide();
    $("#positive_Catafast").hide();
    $("#addtocartbtn_Catafast").hide();
    });
$(document).ready(function(){
    $("#addtocart_Catafast").click(function()
    {
        $("#addtocart_Catafast").toggle(1000);
        $("#negative_Catafast").show();
        $("#positive_Catafast").show();
        $("#addtocartbtn_Catafast").show(1000);  
        });
    });
    
    $(document).ready(function(){
        $("#positive_Catafast").click(function()
        {
            addtocartbuttonCatafast.value++;
            
            });
        });
        $(document).ready(function(){
            $("#negative_Catafast").click(function()
            {
                if(addtocartbuttonCatafast.value != 1)
                {
                addtocartbuttonCatafast.value--;
                } 
                else
                {
                    $("#addtocart_Catafast").show();
                    $("#addtocartbtn_Catafast").hide();
                    $("#negative_Catafast").hide();
                    $("#positive_Catafast").hide();
                    addtocartbuttonCatafast.value=1;
                }
                
                });
            }); 
            
            //the next is augamntin
            //..................
            //.................
            //..............
            $(document).ready(function(){
                $("#negative_Augmentin").hide();
                $("#positive_Augmentin").hide();
                $("#addtocartbtn_Augmentin").hide();
                });
            $(document).ready(function(){
                $("#addtocart_Augmentin").click(function()
                {
                    $("#addtocart_Augmentin").toggle(1000);
                    $("#negative_Augmentin").show();
                    $("#positive_Augmentin").show();
                    $("#addtocartbtn_Augmentin").show(1000);  
                    });
                });
                
                $(document).ready(function(){
                    $("#positive_Augmentin").click(function()
                    {
                        addtocartbuttonAugmentin.value++;
                        
                        });
                    });
                    $(document).ready(function(){
                        $("#negative_Augmentin").click(function()
                        {
                            if(addtocartbuttonAugmentin.value != 1)
                            {
                                addtocartbuttonAugmentin.value--;
                            } 
                            else
                            {
                                $("#addtocart_Augmentin").show();
                                $("#addtocartbtn_Augmentin").hide();
                                $("#negative_Augmentin").hide();
                                $("#positive_Augmentin").hide();
                                addtocartbuttonAugmentin.value=1;
                            }
                            
                            });
                        }); 
                         //the next is stimulan
                         //..................
                        //.................
                        //..............
                        $(document).ready(function(){
                            $("#negative_Stimulan").hide();
                            $("#positive_Stimulan").hide();
                            $("#addtocartbtn_Stimulan").hide();
                            });
                        $(document).ready(function(){
                            $("#addtocart_Stimulan").click(function()
                            {
                                $("#addtocart_Stimulan").toggle(1000);
                                $("#negative_Stimulan").show();
                                $("#positive_Stimulan").show();
                                $("#addtocartbtn_Stimulan").show(1000);  
                                });
                            });
                            
                            $(document).ready(function(){
                                $("#positive_Stimulan").click(function()
                                {
                                    addtocartbuttonStimulan.value++;
                                    
                                    });
                                });
                                $(document).ready(function(){
                                    $("#negative_Stimulan").click(function()
                                    {
                                        if(addtocartbuttonStimulan.value != 1)
                                        {
                                            addtocartbuttonStimulan.value--;
                                        } 
                                        else
                                        {
                                            $("#addtocart_Stimulan").show();
                                            $("#addtocartbtn_Stimulan").hide();
                                            $("#negative_Stimulan").hide();
                                            $("#positive_Stimulan").hide();
                                            addtocartbuttonStimulan.value=1;
                                        }
                                        
                                        });
                                    }); 
                                    //the next is cataflam
                                     //..................
                                     //.................
                                    //..............
                                    $(document).ready(function(){
                                        $("#negative_Cataflam").hide();
                                        $("#positive_Cataflam").hide();
                                        $("#addtocartbtn_Cataflam").hide();
                                        });
                                    $(document).ready(function(){
                                        $("#addtocart_Cataflam").click(function()
                                        {
                                            $("#addtocart_Cataflam").toggle(1000);
                                            $("#negative_Cataflam").show();
                                            $("#positive_Cataflam").show();
                                            $("#addtocartbtn_Cataflam").show(1000);  
                                            });
                                        });
                                        
                                        $(document).ready(function(){
                                            $("#positive_Cataflam").click(function()
                                            {
                                                addtocartbuttonCataflam.value++;
                                                
                                                });
                                            });
                                            $(document).ready(function(){
                                                $("#negative_Cataflam").click(function()
                                                {
                                                    if(addtocartbuttonCataflam.value != 1)
                                                    {
                                                        addtocartbuttonCataflam.value--;
                                                    } 
                                                    else
                                                    {
                                                        $("#addtocart_Cataflam").show();
                                                        $("#addtocartbtn_Cataflam").hide();
                                                        $("#negative_Cataflam").hide();
                                                        $("#positive_Cataflam").hide();
                                                        addtocartbuttonCataflam.value=1;
                                                    }
                                                    
                                                    });
                                                }); 

//Oxaleptal
$(document).ready(function(){
    $("#negative_Oxaleptal").hide();
    $("#positive_Oxaleptal").hide();
    $("#addtocartbtn_Oxaleptal").hide();
    });
$(document).ready(function(){
    $("#addtocart_Oxaleptal").click(function()
    {
        $("#addtocart_Oxaleptal").toggle(1000);
        $("#negative_Oxaleptal").show();
        $("#positive_Oxaleptal").show();
        $("#addtocartbtn_Oxaleptal").show(1000);  
        });
    });
    
$(document).ready(function(){
    $("#positive_Oxaleptal").click(function()
    {
        addtocartbuttonOxaleptal.value++;
            
        });
    });
    $(document).ready(function(){
        $("#negative_Oxaleptal").click(function()
        {
            if(addtocartbuttonOxaleptal.value != 1)
            {
            addtocartbuttonOxaleptal.value--;
            } 
            else
            {
                $("#addtocart_Oxaleptal").show();
                $("#addtocartbtn_Oxaleptal").hide();
                $("#negative_Oxaleptal").hide();
                $("#positive_Oxaleptal").hide();
                addtocartbuttonOxaleptal.value=1;
            }
                
            });
});
//Cymbatex
$(document).ready(function(){
    $("#negative_Cymbatex").hide();
    $("#positive_Cymbatex").hide();
    $("#addtocartbtn_Cymbatex").hide();
    });
$(document).ready(function(){
    $("#addtocart_Cymbatex").click(function()
    {
        $("#addtocart_Cymbatex").toggle(1000);
        $("#negative_Cymbatex").show();
        $("#positive_Cymbatex").show();
        $("#addtocartbtn_Cymbatex").show(1000);  
        });
    });
    
$(document).ready(function(){
    $("#positive_Cymbatex").click(function()
    {
        addtocartbuttonCymbatex.value++;
            
        });
    });
    $(document).ready(function(){
        $("#negative_Cymbatex").click(function()
        {
            if(addtocartbuttonCymbatex.value != 1)
            {
            addtocartbuttonCymbatex.value--;
            } 
            else
            {
                $("#addtocart_Cymbatex").show();
                $("#addtocartbtn_Cymbatex").hide();
                $("#negative_Cymbatex").hide();
                $("#positive_Cymbatex").hide();
                addtocartbuttonCymbatex.value=1;
            }
                
            });
});
//Citra
$(document).ready(function(){
    $("#negative_Citra").hide();
    $("#positive_Citra").hide();
    $("#addtocartbtn_Citra").hide();
    });
$(document).ready(function(){
    $("#addtocart_Citra").click(function()
    {
        $("#addtocart_Citra").toggle(1000);
        $("#negative_Citra").show();
        $("#positive_Citra").show();
        $("#addtocartbtn_Citra").show(1000);  
        });
    });
    
$(document).ready(function(){
    $("#positive_Citra").click(function()
    {
        addtocartbuttonCitra.value++;
            
        });
    });
    $(document).ready(function(){
        $("#negative_Citra").click(function()
        {
            if(addtocartbuttonCitra.value != 1)
            {
            addtocartbuttonCitra.value--;
            } 
            else
            {
                $("#addtocart_Citra").show();
                $("#addtocartbtn_Citra").hide();
                $("#negative_Citra").hide();
                $("#positive_Citra").hide();
                addtocartbuttonCitra.value=1;
            }
                
            });
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

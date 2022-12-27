<!DOCTYPE html>

<head>
  <title>Capsule Pharmacy</title>
  <!-- To Support Arabic Language in website-->
  <meta charset="utf-8"/>
  <!--Our website description for google search-->
  <meta name="description"content="Order your medication from Capsule Pharmacy 24 hours a day, 7 days a week. Pay online or in cash at the time of delivery, use your medical insurance, and we will deliver your medication right to your door!"/>

  <link rel="icon" type="image/x-icon" href="../images/icon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--Our CSS files/URLs-->
  <link rel="stylesheet" href="Shop.css">
</head>

<body>
  <!--Pre-loader--> 
<div class="absCenter ">
  <div class="loaderPill">
      <div class="loaderPill-anim">
          <div class="loaderPill-anim-bounce">
              <div class="loaderPill-anim-flop">
                  <div class="loaderPill-pill"></div>
              </div>
          </div>
      </div>
      <div class="loaderPill-floor">
          <div class="loaderPill-floor-shadow"></div>
      </div>
      <div class="loaderPill-text">Loading...Please wait</div>
  </div>
</div>
  <!-- BASICS for the website <NAVBAR>(Shop)-->
   <div class="navbar">
      <nav>
        <h1>Capsule<br><br> Pharmacy</h1>
 <ul>
  <li>
    <a href="..\Home\Home.php">Home</a>
</li>
<li>
  <a href="Shop.php">Shop Now</a>
</li>
<li>
  <a href="..\Contact us\Contact us.php">Contact Us</a>
</li>
<li>
  <a href="..\About us\About us.php">About us</a>
</li>
<li>
  <a href="..\Sign in\Sign in.php">Sign in</a>
</li>
<li>
  <a href="..\Sign Up\Sign up.php">Sign up</a>
</li>
 </ul>
</nav>
</div>
  <!-- THE END <NAVBAR> -->
    
<!--the sort by dropdown-->

<table>
  <tr>
    <td>
      <a href="..\Shop\Cart\Cart.php">
        <i class="fa fa-shopping-cart" style="position:relative; left:192%; top:70px; font-size:48px;color:#05a1a8;"></i></a>
      <input type="text" id="Search" onkeyup="myFunction()" placeholder="Search..." title="Type in a name">
    </td>
  </tr>
</table>
<div class="dropdown">
  <button onclick="DropDown()" class="dropbtn">Sort By &#8595</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#home">Sort to A-Z</a>
    <a href="#about">Sort to Z-A</a>
    <a href="#contact">Price Low To High</a>
    <a href="#home">Price High to Low </a>
  </div>
</div>
<div class="Price_Menu">
  <h2>Price</h2>
  <div id="myPrice" class="price-content">
    <input  type="number" id="PriceFrom" min="0" value="1" >
    <p style="font-size:19px; position: relative; bottom:45px; left:100px;">To</p>
    <input  type="number" id="PriceTo" min="0" value="1" >
    <input type="button" class="ApplyPrice" onclick="MYrange()" value="APPLY">
  </div>
</div>
<div class="Brands">
  <h2>Brands</h2>
     <input type="checkbox"class="Med_Menu"> <label class="option">HOSPITAL MEDICINES</label>
     <input type="checkbox"class="Med_Menu"> <label class="option">HOSPITAL MEDICINES</label>
     <input type="checkbox"class="Med_Menu"> <label class="option">HOSPITAL MEDICINES</label>
     <input type="checkbox"class="Med_Menu"> <label class="option">HOSPITAL MEDICINES</label>
     <input type="checkbox"class="Med_Menu"> <label class="option">HOSPITAL MEDICINES</label>
     <input type="checkbox"class="Med_Menu"> <label class="option">HOSPITAL MEDICINES</label>
     <input type="button" class="ApplyBrand" value="APPLY">
</div>
<div class="ShopContentOne">
  
    <div class="FirstColumn">
     <img class="images" src="..\Images\Shop\Stimulan.jpg">
     <h3>STIMULAN 400MG 30/CAP</h3>
     <h5 class="range">30 LE</h5>
      <button id="addtocart_Stimulan"><b>Add to cart</b></button>
      <button id="negative_Stimulan">-</button>
      <input  type="number" id="addtocartbtn_Stimulan" min="0" value="1" >
      <button id="positive_Stimulan">+</button>
    </div>

    <div class="FirstColumn">
      <img class="images" src="..\Images\Shop\Cataflam.jpg">
     <h3>CATAFLAM 50MG 20/TAB</h3>
      <h5 class="range">45 LE</h5>
      <button id="addtocart_Cataflam"><b>Add to cart</b></button>
      <button id="negative_Cataflam">-</button>
      <input type="number" id="addtocartbtn_Cataflam" min="0" value="1" >
     <button id="positive_Cataflam">+</button>
    </div>

    <div class="FirstColumn">
      <img class="images" src="..\Images\Shop\Augmentin.jpg">
      <h3>AUGMENTIN 1GM 14/TAB</h3>
      <h5 class="range">100 LE</h5>
      <button id="addtocart_Augmentin"><b>Add to cart</b></button>
      <button id="negative_Augmentin">-</button>
      <input type="number" id="addtocartbtn_Augmentin" min="0" value="1" >
      <button id="positive_Augmentin">+</button>
    </div>

</div>

<div class="ShopContentTwo">
  
  <div class="SecondColumn">
   <img class="images" src="..\Images\Shop\Oxaleptal.jpg">
   <h3>OXALEPTAL 300MG 30/TAB</h3>
   <h5 class="range">65 LE</h5>
    <button id="addtocart_Oxaleptal"><b>Add to cart</b></button>
    <button id="negative_Oxaleptal">-</button>
    <input  type="number" id="addtocartbtn_Oxaleptal" min="0" value="1" >
    <button id="positive_Oxaleptal">+</button>
  </div>

  <div class="SecondColumn">
    <img class="images" src="..\Images\Shop\Cymbatex.jpg">
   <h3>CYMBATEX 30MG 30/TAB</h3>
    <h5 class="range">190.5 LE</h5>
    <button id="addtocart_Cymbatex"><b>Add to cart</b></button>
    <button id="negative_Cymbatex">-</button>
    <input type="number" id="addtocartbtn_Cymbatex" min="0" value="1" >
   <button id="positive_Cymbatex">+</button>
  </div>

  <div class="SecondColumn">
    <img class="images" src="..\Images\Shop\Citra.jpg">
    <h3>CITRA FORTE GRANULES 280GM</h3>
    <h5 class="range">115 LE</h5>
    <button id="addtocart_Citra"><b>Add to cart</b></button>
    <button id="negative_Citra">-</button>
    <input type="number" id="addtocartbtn_Citra" min="0" value="1" >
    <button id="positive_Citra">+</button>
  </div>

</div>
</div>

</body>
<footer>
   <!--Our JS files/URLs-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
   <script src="Shop.js"></script>
   <script src="https://kit.fontawesome.com/f98208c8c8.js" crossorigin="anonymous"></script><!-- Ready made functions for icons ex:Location/Email or phone-->
  <div id="footer">
    <h4>Useful links</h4>
    <ul>
      <li>
        <a href="Shop.php">Shop</a>
    </li>
    <li>
      <a href="..\About us\About us.php">About us</a>
    </li>
      <li>
        <a href="..\Contact us\Contact us.php">Contact Us</a>
      </li>
      <li>
        <a href="..\Privacy policy\Privacy policy.php">Privacy policy</a>
      </li>
      <li>
        <a href="..\Terms and Service\Terms and Service.php">Terms and Service</a>
      </li>
   </ul>
   <h3>CONTACT INFORMATION</h3>
   <p>Coming soon</p>
   <p>Coming soon</p>
   <p>Coming soon@comingsoon.com</p>
   <i class="fa-solid fa-location-dot"style="font-size:20px; position: relative; left:300px; bottom:337px;"></i>
   <i class="fa-solid fa-phone" style="font-size:20px; position: relative; left:280px; bottom:297px;"></i>
   <i class="fa-solid fa-envelope" style="font-size:20px; position: relative; left:257px; bottom:252px;"></i>
    </div>
    <div id="footermap">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.7906226700115!2d30.95575751518746!3d29.95670058191425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458569393ca36ab%3A0xc1f1038e9a84b7a4!2sMSA!5e0!3m2!1sen!2seg!4v1669477559297!5m2!1sen!2seg" style="border:0;" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
</footer>
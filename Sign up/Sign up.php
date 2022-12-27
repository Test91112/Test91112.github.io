<!DOCTYPE html>
<head>
  <title>Capsule Pharmacy</title>

   <!--To Support Arabic Language in website-->
  <meta charset="utf-8"/>

  <!--Our website description for google search-->
  <meta name="description"content="Order your medication from Capsule Pharmacy 24 hours a day, 7 days a week. Pay online or in cash at the time of delivery, use your medical insurance, and we will deliver your medication right to your door!"/>

  <link rel="icon" type="image/x-icon" href="../images/icon.ico">

    <!--Our CSS files/URLs-->
    <link rel="stylesheet" href="Sign up.css">  
    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>

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
  <!-- BASICS for the website <NAVBAR>(Sign up)-->
   <div class="navbar">
      <nav>
        <h1>Capsule<br><br> Pharmacy</h1>
 <ul>
    <li>
        <a href="..\Home\Home.php">Home</a>
    </li>
    <li>
      <a href="..\Shop\Shop.php">Shop Now</a>
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
      <a href="Sign up.php">Sign up</a>
    </li>
 </ul>
    <!-- THE END <NAVBAR> -->
</nav>

<!-- THE END <NAVBAR> -->
<div id="Sign_up">
<div id="Sign_up_content">
  <h1>Sign up</h1>
  <form action="Register.php" method="post">
    <p id="AHAA">Already have an account? <a href="..\Sign in\Sign in.php" style= color:#05a1a8;><b>Sign in</b></a></p>
    <p id="FNamePH">First Name</p>
    <input type="text" name="FName" id="FName" placeholder="" >
    <p id="LNamePH">Last Name</p>
    <input type="name" name ="LName" id="LName" placeholder="" onkeyup="ValidationAppearance()">
    <i class="fa-solid fa-circle"style="font-size:7px; position: relative; right:325px; top:116px; color: #05a1a8;"></i>  <p id="F_LNameREQ">First name & last name shouldn't contain numbers</p>

    <p id="MalePH">Male</p>
    <p id="FemalePH">Female</p>
    <input id="male" type="radio" name="male" value="male">
    <input id="female" type="radio" name="female" value="female"> 
    <p id="BDMYPH">Age</p>
    <input type="number" name="BDMY" id="BDMY" onkeyup="ValidationAppearance()">
    <i class="fa-solid fa-circle"style="font-size:7px; position: relative; right:325px; top:45px; color: #05a1a8;"></i>  <p id="AgeREQ">You must be 16 years or older</p>
    <p id="PhoneNUMPH">Phone Number</p>
    <input id="phone" type="tel" name="phone" minlength="11" maxlength="11" />
    <p id="EmailPH">Email</p>
    <input type="email" name="email" id="email" placeholder="forexample@gmail.com" pattern=".+@gmail\.com" oninput="CheckEmail()"><br><br>
    <span id="check-email"></span>
    <p id="PasswordPH" >Password</p>
    <p id="PasswordCONFIRMPH">Confirm your Password</p>
    <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br>
    
    <div id="requirements">
    <i class="fa-solid fa-circle"style="font-size:7px; position: relative; right:60px; top:22px; color: #05a1a8;"></i><p id="OneNumValid" style="position:relative; top:2px;">     At least one number</p>
    <i class="fa-solid fa-circle"style="font-size:7px; position: relative; right:60px; top:22px; color: #05a1a8;"></i><p id="CharNumValid" style="position:relative; top:2px;">         8 characters minimum</p>
    <i class="fa-solid fa-circle" style="font-size:7px; position: relative; right:60px; top:22px; color: #05a1a8;"></i><p id="LowercaseValid" style="position:relative; top:2px;">                         At least one lowercase character</p>
    <i class="fa-solid fa-circle" style="font-size:7px; position: relative; right:60px; top:22px; color: #05a1a8;"></i><p id="SpecialCharValid" style="position:relative; top:2px;">                      At least one Special character</p>
    <input type="password" name="password" id="password" onkeyup="ValidationAppearance()">
    <input type="password" id="passwordCONFIRM">
    </div>
    <button type="submit" name="register" value="Register" id="SIGNUP" onclick="SignupValidations()">SIGN UP</button>
    <p id="PolicyNTerms">By clicking the "Sign up for free" button, you are creating an account, and agree to Capsule Pharmacy <a href="..\Terms and Service\Terms and Service.php" style= color:#05a1a8;><b>Terms and Service</b></a> and <a href="..\Privacy Policy\Privacy Policy.php" style= color:#05a1a8;><b>Privacy Policy</b></a></p>

  </form>
</div>
</div>
<script>
  function CheckEmail() {
    jQuery.ajax({
    url: "check.php",
    data:'email='+$("#email").val(),
    type: "POST",
    success:function(data){
        $("#check-email").html(data);
    },
    error:function (){}
    });
  }
  </script>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>  
<footer>


  <!--Our JS files/URLs-->
  <script src="https://kit.fontawesome.com/f98208c8c8.js" crossorigin="anonymous"></script><!-- Ready made functions for icons ex:Location/Email or phone-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="Sign up.js"></script>
  <!--End of links-->
  <div id="footer">
    <h4>Useful links</h4>
    <ul>
      <li>
        <a href="..\Shop\Shop.php">Shop</a>
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
   <i class="fa-solid fa-location-dot"style="font-size:20px; position: relative; left:300px; bottom:280px;"></i>
   <i class="fa-solid fa-phone" style="font-size:20px; position: relative; left:280px; bottom:248px;"></i>
   <i class="fa-solid fa-envelope" style="font-size:20px; position: relative; left:257px; bottom:215px;"></i>
    </div>
    <div id="footermap">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.7906226700115!2d30.95575751518746!3d29.95670058191425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458569393ca36ab%3A0xc1f1038e9a84b7a4!2sMSA!5e0!3m2!1sen!2seg!4v1669477559297!5m2!1sen!2seg" style="border:0;" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
</footer>
<?php
# create database connection
$connect = mysqli_connect("localhost","root","","pharmacy");

if(!empty($_POST["email"])) {
  $query = "SELECT * FROM users WHERE Email='" . $_POST["email"] . "'";
  $result = mysqli_query($connect,$query);
  $count = mysqli_num_rows($result);
  if($count>0) {
    echo "<span style='color:green'>Email does exist</span>";
    echo "<script>$('#login').prop('disabled',false);</script>";

  }else{
    echo "<span style='color:red'> Email doesn't exist .</span>";
    echo "<script>$('#login').prop('disabled',true);</script>";
  }
}
else
{
  echo "<script>$('#login').prop('disabled',true);</script>";
}
?>
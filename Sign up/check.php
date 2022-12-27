<?php
# create database connection
$connect = mysqli_connect("localhost","root","","pharmacy");

if(!empty($_POST["email"])) {
  $query = "SELECT * FROM users WHERE Email='" . $_POST["email"] . "'";
  $result = mysqli_query($connect,$query);
  $count = mysqli_num_rows($result);
  if($count>0) {
    echo "<span style='color:red'> Sorry Email already exists .</span>";
    echo "<script>$('#SIGNUP').prop('disabled',true);</script>";
  }else{
    echo "<span style='color:green'> Email available for Registration .</span>";
    echo "<script>$('#SIGNUP').prop('disabled',false);</script>";
  }
}
?>
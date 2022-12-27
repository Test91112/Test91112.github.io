<?php

if ($_POST) 
{
    if (isset($_POST['register']) && $_POST['register'] == "Register") 
    {      
        // step 2 : connect to database
        include_once 'Config.php';  
        global $link;
        $conn = $link;
        $firstname = $_POST['FName'];
        $lastname=$_POST['LName'];
        $age= $_POST['BDMY'];
        $phonenum=$_POST['phone'];
        $mail=$_POST['email'];
        $password = $_POST['password'];
        if(isset($_POST['male']))
        {
          $gender = 'Male';
        }
        else
        {
          $gender = 'Female';
        }
        //Sending data to the database
        //Create SQL Query
        $sql = "INSERT INTO users (Fname, Lname, Gender, Age, Phone_Num, Email, Password)"
        . " VALUES ('".$firstname."' , '".$lastname. "','".$gender."','".$age."','".$phonenum."','".$mail."','".$password."')";
        echo $sql;
        echo '<br>';

        //Execute Query
        if ($conn->query($sql) === TRUE) 
        {
          //Return Database Result
          echo "New record created successfully";
          header("location:../Sign in/Sign in.php");
        } 
        else 
        {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
} 

?>
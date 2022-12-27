<?php 

if ($_POST) {
    if (isset($_POST['login']) && $_POST['login'] == "LOGIN") {

        $nameErr = "";
        //echo $nameErr;
        // step 1 : Get The data from the inputs
        $email = $_POST['email'];
        $password = $_POST['password'];
        $guest = 'Test';

        // step 2 : connect to database
        include_once 'Config.php';
        global $link;
        $conn = $link;
        // step 3 : send data to database
        // 3.1 create sql query
        $sql = mysqli_query($conn, "select * from users where Email='" . $email . "' and Password='" . $password. "'");
        $row = mysqli_fetch_array($sql);
        if(is_array($row))
        {
            $_SESSION["Email"] = $row['Email'];
            $_SESSION["Password"] = $row['Password'];
        }
        else
        {
            echo '<script type ="text/javascript">';
            echo 'alert("invalid user or pass")';
            echo 'window.location.href = "Sign in.php?error=Password is incorrect';
            echo '</script>';
        }
        // 3.2 execute query
       // $res = $conn->query($sql);
        //check if query returned more than 1 row

    }
    if(isset($_SESSION["Email"]))
    {
        header("location:../Home/Home.php");
        
    }
    else
    {
        //$_SESSION["email"] = $guest;
        header("location:../Sign in/Sign in.php?error=Password is incorrect");
        exit();
    }
} 
?>
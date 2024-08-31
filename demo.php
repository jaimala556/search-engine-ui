<?php
$username="infohunt";
    $password="Anubhav@#3333";
    $database="infohunt";
    $server="localhost";
    $db_handle;
    $db_handle=mysqli_connect($server,$username,$password,$database) or die('Could not connect to database Server Issue');
    $email="anbhavranjan2525@gmail.com";
    $password="Anubhav@#3333";
    $sql=mysqli_query($db_handle,"SELECT * FROM login where Email='$email' and UserPassword='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
      $_SESSION["Email"] = $row['Email'];
      $_SESSION["UserPassword"]=$row['UserPassword'];
      $cookie_data =$row['FirstName'];
      $cookie_gender=$row['Gender'];
      setcookie("username",$cookie_data,time()+84600,"/");
      setcookie("gender",$cookie_gender,time()+84600,"/");
      echo $_COOKIE["username"];
        echo $_COOKIE["gender"];
    //   include_once 'engine.php';
    }
    ?>
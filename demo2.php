<?php
  echo $_COOKIE["username"];
  echo "<br>";
  setcookie("username","Anubhav",time()+84600,"/");
  echo $_COOKIE["gender"];
  echo "<br>";
  echo $_COOKIE["username"];
  echo "<br>";
?>
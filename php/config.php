<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "aeon";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>

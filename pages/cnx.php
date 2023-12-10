<?php 
$host = "localhost";
$username = "root";
$password = "";
$database = "peoplepertask";

// Create connection
$cnx =  mysqli_connect($host, $username, $password, $database);


if ($cnx->connect_error) {
    die("Connection failed: " . $cnx->connect_error);
  }
?>
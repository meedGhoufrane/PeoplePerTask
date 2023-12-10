<?php
require 'cnx.php';

$id = $_GET['id'];

$sql = "DELETE from user where id = $id";
$res = mysqli_query($cnx, $sql);

if($res){
    header("location:dashboardusers.php");
}

mysqli_close($cnx);
?>
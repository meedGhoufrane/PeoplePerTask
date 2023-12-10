<?php
require 'cnx.php';

$id = $_GET['id'];

$sql = "DELETE from categories where id = $id";
$res = mysqli_query($cnx, $sql);

if($res){
    mysqli_close($cnx);
    header("location:dashboard.php");
}
 
?>
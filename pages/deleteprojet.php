<?php
require 'cnx.php';

$id = $_GET['id'];

$sql = "DELETE from Projets where id = $id";
$res = mysqli_query($cnx, $sql);

if($res){
    mysqli_close($cnx);
    header("location:dashboardtrend.php");
}
 
?>
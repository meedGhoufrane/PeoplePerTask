<?php
require 'cnx.php';

$name = htmlspecialchars($_POST['nomcat']);

    

$sql = "INSERT into categories(nomcat) values('$name')";

$res = mysqli_query($cnx, $sql);

if ($res)
    header("location:dashboard.php");





mysqli_close($cnx);
?>
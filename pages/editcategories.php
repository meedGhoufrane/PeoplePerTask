<?php
require 'cnx.php';

$id = $_GET['id'];
$name = $_POST['nomcat'];


$sql = "UPDATE categories
        SET
        nomcat = '$name'
        WHERE
            id = $id";
    

    $res = mysqli_query($cnx, $sql);
    if($res)
        header("location:dashboard.php");

        mysqli_close($cnx);

?>
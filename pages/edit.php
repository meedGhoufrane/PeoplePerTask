<?php
require 'cnx.php';

$id = $_GET['id'];
$name = $_POST['Nom'];
$email = $_POST['email'];


$sql = "UPDATE user
        SET
        Nom = '$name',
        email = '$email'
        WHERE
            id = $id";
    

    $res = mysqli_query($cnx, $sql);
    if($res)
        header("location:dashboardusers.php");

        mysqli_close($cnx);

?>


<!-- <?php
require 'cnx.php';

$id = $_GET['id'];
$name = $_POST['Nom'];
$email = $_POST['email'];
$otherinfo = $_POST['otherinfo'];

$sql = "UPDATE user
        SET
        Nom = '$name',
        email = '$email',
        otherinfo = '$otherinfo'
        WHERE
            id = $id";
    

$res = mysqli_query($cnx, $sql);
if ($res) {
    header("location:dashboardusers.php");
    exit(); // It's good practice to exit after a header redirect
} else {
    // Handle the case where the query fails
    echo "Error: " . mysqli_error($cnx);
}

mysqli_close($cnx);
?> -->

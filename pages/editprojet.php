<?php
require 'cnx.php';



$id = $_POST['id'];
$Titre = htmlspecialchars($_POST['Title']);
$Descriptions =htmlspecialchars($_POST['Descriptions']);
$idcat = htmlspecialchars($_POST["idcat"]);
$iduser = htmlspecialchars($_POST["iduser"]);

$sql = "UPDATE Projets
        SET
        Titre = '$Titre',
        Descriptions = '$Descriptions',
        idcat = $idcat,
        iduser = $iduser
        WHERE
            id = $id";
    
    

    $res = mysqli_query($cnx, $sql);
    if($res)
        header("location:dashboardtrend.php");

        mysqli_close($cnx);

?>
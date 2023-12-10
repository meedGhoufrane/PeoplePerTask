<?php

require 'cnx.php';
session_start();

$Titre = $_POST['Title'];
$Descriptions = $_POST['Descriptions'];
$idcat = $_POST['nomcat'];
$iduser = $_POST['iduser'];

$sql= "INSERT INTO Projets(Titre,Descriptions,idcat,iduser)
VALUES('$Titre','$Descriptions',$idcat,$iduser)";

$rest = mysqli_query($cnx,$sql);
if ($rest)
    header("location:dashboardtrend.php");


?>





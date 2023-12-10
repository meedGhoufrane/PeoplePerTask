<?php
require '../cnx.php';

$Montant = $_POST['Montant'];
$Delai = $_POST['Delai'];
$iduser = $_POST['iduser'];
$idprojet = $_POST['idprojet'];




// Convert the date 
$timestamp = strtotime($Delai);
$formattedDate = date('Y-m-d', $timestamp);

$sql = "INSERT INTO Offres (Montant, Délai, iduser, idprojet) VALUES (?,?,?,?);";

$stmt = mysqli_prepare($cnx, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "isii", $Montant, $formattedDate,$iduser, $idprojet);

    $res = mysqli_stmt_execute($stmt);

    if ($res) {
        header("location: offer.php");
        echo 'insert valid ';
        exit(); 
    } else {
        
        error_log("Error: " . mysqli_error($cnx));
        echo "An error occurred while processing your request. Please try again later.";
    }

    mysqli_stmt_close($stmt);
} else {
    // Handle the case where the statement preparation fails
    // Log the error for reference and show a user-friendly message
    error_log("Statement preparation error: " . mysqli_error($cnx));
    echo "An error occurred while processing your request. Please try again later.";
}

mysqli_close($cnx);
?>

<?php
require 'cnx.php';


$Skills = htmlspecialchars($_POST['Skills']);


$sql = "INSERT INTO user (Skills) VALUES (?)";
$stmt = mysqli_prepare($cnx, $sql);

if ($stmt) {
    
    mysqli_stmt_bind_param($stmt, "s", $Skills);

    $res = mysqli_stmt_execute($stmt);

   
    if ($res) {
        header("location: profileuser.php");
        exit(); 
    } else {
      
        error_log("Error: " . mysqli_error($cnx));
        echo "An error occurred while processing your request. Please try again later.";
    }

    mysqli_stmt_close($stmt);
} else {
   
    error_log("Statement preparation error: " . mysqli_error($cnx));
    echo "An error occurred while processing your request. Please try again later.";
}

mysqli_close($cnx);
?>

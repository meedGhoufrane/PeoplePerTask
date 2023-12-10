<?php

require '../pages/cnx.php';

session_start();

$name = $_POST['Name'];
$email = $_POST['email'];
$password = $_POST['Password'];
$confirmPassword = $_POST['comfirmPassword']; // Fix the variable name
$hashedPassword = password_hash($password, PASSWORD_BCRYPT); // Fix the variable name
$role = $_POST['role'];
$profil_image = $_FILES['img']['name'];
$profile_img_tmp_name = $_FILES['img']['tmp_name'];
$upload_directory = 'path/to/secure/directory/';
$profile_img_folder = $upload_directory . $profil_image;

    // Create the directory if it doesn't exist
    if (!file_exists($upload_directory)) {
        mkdir($upload_directory, 0777, true);
    }


// $duplicate = mysqli_query($cnx,"SELECT * from user WHERE  email = '$email'");
// if(mysqli_num_rows($duplicate) > 0){
//     echo
//     "<script> alert('email has ALready Taken !'); </script>";
// }

if ($password == $confirmPassword) { // Fix the variable name in the comparison
    

    $sql = "INSERT INTO user (Nom, email, passwords,role,path_img) VALUES (?,?,?,?,?)";

    // préparez une requête stmt (mysqli_prepare)
    $stmt = mysqli_prepare($cnx, $sql);

    // liez le paramètre (mysqli_stmt_bind_param)
    mysqli_stmt_bind_param($stmt, 'sssss', $name, $email, $hashedPassword,$role,$profil_image); // Fix the variable name

    // exécutez la requête préparée (mysqli_stmt_execute )
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        header("Location:../pages/sign.php");
        move_uploaded_file($profile_img_tmp_name, $profile_img_folder);
        exit(); // Ensure script execution stops after redirection
    } else {
        echo "Error: " . mysqli_error($cnx); // Display the actual error
    }

    // Assurez-vous de quitter le script après une
}
<?php

require '../pages/cnx.php';

session_start();

$name = $_POST['Name'];
$email = $_POST['email'];
$password = $_POST['Password'];
$confirmPassword = $_POST['confirmPassword']; // Fixed variable name
$hashedPassword = password_hash($password, PASSWORD_BCRYPT); // Fixed variable name
$role = $_POST['role'];
$profil_image = $_FILES['img']['name'];
$profile_img_tmp_name = $_FILES['img']['tmp_name'];
$upload_directory = 'path/to/secure/directory/';
$profile_img_folder = $upload_directory . $profil_image;

// Create the directory if it doesn't exist
if (!file_exists($upload_directory)) {
    mkdir($upload_directory, 0777, true);
}

// Input validation
if (empty($name) || empty($email) || empty($password) || empty($confirmPassword) || empty($role)) {
    echo "All fields are required.";
    exit();
}

if ($password != $confirmPassword) {
    echo "Password and Confirm Password do not match.";
    exit();
}


// SQL Injection prevention
$sql = "INSERT INTO user (Nom, email, passwords, role, path_img) VALUES (?,?,?,?,?)";
$stmt = mysqli_prepare($cnx, $sql);
mysqli_stmt_bind_param($stmt, 'sssss', $name, $email, $hashedPassword, $role);

$result = mysqli_stmt_execute($stmt);

if ($result) {
    move_uploaded_file($profile_img_tmp_name, $profile_img_folder);
    header("Location:../pages/sign.php");
    exit();
} else {
    echo "Error: " . mysqli_error($cnx);
}
?>

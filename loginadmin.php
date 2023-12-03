<?php 
require 'connection.php';
session_start();
if(isset($_POST['submit'])){
$email = $_POST['email'];
$password = $_POST['password'];
$hash_password = password_hash($password, PASSWORD_DEFAULT);
$sql = "SELECT `user_name`,`email`,`role`, `password` FROM `users` WHERE email= '$email' ";
$result = mysqli_query($conn, $sql);
if(!$result){
    echo "failed".mysqli_query_error();
    
}else{
    if(mysqli_num_rows($result)!=0){
    $fetch = mysqli_fetch_assoc($result);
    if(password_verify($password,$fetch['password'])){
        if( $fetch['role']=='admin'){
            $_SESSION['valid_seesion']=1;
            $username = $fetch['user_name'];
            setcookie('user_name',$username,time()+60);
            $_SESSION['user_name']= $username;
            header("Location: dashboard.php?acces aceppted!!");
        }
        else{
            header("Location: sign.php?msg=login as a user acces denied???");
        }
    }else{
        $error_password = 'Incorrect password ?!';
    }

}else{
    $error_email = 'email unfound'; 
}
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .form-group{
        margin-bottom:20px;
        font-size:25px;
    };

    </style>
</head>
<body>
<div id="container" style="display:flex;flex-direction:column;align-items:center;margin-top:130px;">
<form method="post" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;padding:70px;text-align:center;border-radius:10px">
  <div class="form-group">
    <label style="margin-bottom:10px;" for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <?php if(isset($error_email)){
    echo "<h5 style='color:red;font-size:15px;'>".$error_email."</h5>";
  } 
  ?>
</div>
  <div class="form-group">
    <label style="margin-bottom:10px;" for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
    <?php if(isset($error_password)){
    echo "<h5 style='color:red;font-size:15px;'>".$error_password."</h5>";
  } 
  ?>
  </div>
  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>
</div>   
<script src="js/bootstrap.min.js"></script>
</body>
</html>
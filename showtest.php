<!-- CREATE USING INSERT -->

<?php 
// connection between the server and the database
$host = 'localhost';
$username='root';
$password = '';
$dbname = 'peoplepertask_backend';

$conn = mysqli_connect($host , $username, $password , $dbname);

if(!$conn){
   die( echo "connection failed". mysqli_connect_error());
}
?>

<?php 
//insert from the website to the databse

require 'connection.php';
if(isset($_POST['submit'])){
$fname = $_POST['name'];
$age = $_POST['number'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];


$sql = "INSERT INTO `users`(`user_name`,`user_number`,`user_age`,`user_phone`) VALUES('$fname','$number','$age','$subject')";

$result = mysqli_query($conn, $sql);

if($result){
  header("Location: crud.php?msg= record created succesfuly")
}
else{
    echo "failed". mysqli_query_error();
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="">
            <input type="text" id="fname" name="fname">
        </label><label for="">
            <input type="number" id="number" name="number">
        </label><label for="">
            <input type="text" id="subject" name="subject">
        </label><label for="">
            <input type="phone" id="phone" name="phone">
        </label>
        <button type="submit">submit</button>
    </form>
</body>

</html>

<!--READ USING  UPDATE-->

<?php 
//connection php file 

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'peoplepertask_data';

$conn = mysqli_connect($servername , $username , $password , $dbname);

if(!$conn){
    die(echo "failed". mysqli_connect_error());
}
?>

<?php
//update database from the front end 

require 'connection.php';
if(isset($_POST['submit'])){
$id = $_POST['id'];
$age = $_POST['age'];
$subject = $_POST['subject'];
$name = $_POST['name'];
 $sql= "UPDATE `users` SET `user_name`=$name' , `user_age`='$age' , `user_subject`='$subject' WHERE `user_id`='$id'";
  $result = mysqli_query($conn, $sql);
  
  if($result){
    header("Location: crud.php?mesg=RECORD UPDATED");
  }
  else {
    echo "failed". mysqli_query_error(); 
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method='post'>
        <label for="id"></label>
        <input type="text" name="id">
        <label for="name"></label>
        <input type="text" name="name">
        <label for="subject"></label>
        <input type="text" name="subject">
        <label for="age"></label>
        <input type="age" name="age">
        <button type="submit">submit</button>
    </form>
</body>
</html>


<!--DELETE USING DELETE-->
<?php 
//connection php file 

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'peoplepertask_data';

$conn = mysqli_connect('$localhost' ,'$username','$password','$dbname');
if(!$conn){
    die(echo "failed". mysqli_connect_error());
}

?>
<?php 

//delete data from front end

require 'connection.php';
if(isset($_POST['submit'])){
    $id = $_POST['id']

    $sql = "DELETE FROM `users` WHERE `id`= '$id'";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: crud.php?msg= USER DELETED");
    }
    else{
        echo "failed". mysqli_query_error();
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="">
    <label for="id">id</label>
    <input type="text" name="id">
    <button type="submit">submit</button>
   </form> 
</body>
</html>
<!--READ USING SELECT-->
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'peoplepertask_data';

$conn = mysqli_connect($servername , $username , $password , $dbname);

if(!$conn){
    die(echo "failed".mysqli_connect_error());
}
?>
 <?php
 require 'connection.php';
 $sql = "SELECT * FROM table_name";

 
 ?>
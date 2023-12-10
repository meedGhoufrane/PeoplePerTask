<!-- <?php
require 'cnx.php';

// if(isset($_POST['submit'])){

$name = $_POST['Commentaire'];
$iduser = $_POST['iduser'];
$img_pth = $_POST['path'];

    

$sql = "INSERT into temoignages(Commentaire,iduser,img_pth) values('$name,$iduser,$img_pth')";

$res = mysqli_query($cnx, $sql);

if ($res)
    header("location:temoignages.php");





mysqli_close($cnx);
// }

?> -->
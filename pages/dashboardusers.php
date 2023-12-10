<?php 
session_start();
if (isset($_SESSION["name"])) {
    //code here
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/dashboardtrend.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/dashboardusers.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="js/dashboardusers.js"></script>
    <title>PeoplePerTask</title>
</head>
<style>
    .btn-group{
    display: flex;
    gap: 1rem;
}
a{
        list-style: none;
        color:#fff;
        text-decoration:none;
    }
    .imgpro{
        width: 5%;
        height: 5%;
        border-radius: 50%;
    }
</style>
<body>
<?php include '../component/slidbar.php'?>
<h1 class="users-header">All users:</h1>
<div id="table-container">

<!-- Button trigger modal -->
<a   class="btn btn-success" href="./createform.php">
Create new user
</a>
<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>email</th>
                <th>image</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'cnx.php';
            $res = $cnx->query('SELECT * from user');
            foreach($res as $value):
            ?>
            <tr>
                <td><?=$value['id'] ?></td>
                <td><?=$value['Nom'] ?></td>
                <td><?=$value['email'] ?></td>
                <td> <img class="imgpro" src="path/to/secure/directory/<?= $_SESSION['img'] ?>" height="30%" width="30%" alt="///"></td>
                
                <td>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <div>
                        <form class="pr-3" method='GET'>
                            <button type="button" class="btn btn-danger " name = "delete">
                                    <a  class="hover:bg-red-500 hover:text-white text-red-500 rounded-md p-2" 
                                    href="./delete.php?id=<?=$value['id']?>" onclick="confirmDelete(event)">Delete
                                </a>
                            </button>
                         </form>
                    </div>
                    <form class="pr-3" method='GET'>
                            <button type="button" class="btn btn-warning " name = "edit">
                                    <a  class="hover:bg-red-500 hover:text-white text-red-500 rounded-md p-2" 
                                    href="./editform.php?id=<?=$value['id']?>" >update
                                </a>
                            </button>
                         </form>
                    </div>      
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
</div> 
</div>
    <script src="https://kit.fontawesome.com/e80051e55f.js" crossorigin="anonymous"></script>
    <script src="../js/dashboardusers.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="../js/dashboardhome.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/contact.js"></script>
    <script src="https://kit.fontawesome.com/e80051e55f.js" crossorigin="anonymous"></script>

    <script>
        function confirmDelete(event) {
            if (!confirm('Your are about to delete this item')) {
                event.preventDefault();
            }
        }
        $(document).ready(function () {     $('#example').DataTable(); });
    </script>
    
</body>
</html>
<?php 
    } else{
    header('Location: sign.php');
    }


?>

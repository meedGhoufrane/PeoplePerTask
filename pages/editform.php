
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <title>PeoplePerTask</title>
</head>
<style>
    .form{
        width: 60%;
        display: flex;
        
    }
    form{
        padding-left:17rem;
    }
    #button{
        margin-top: 5rem;
    }
</style>
<body>
<?php include '../component/slidbar.php'?>

    <section class ="form">
        <?php
        include 'cnx.php';

        $id = $_GET['id'];

        $stmt = $cnx->prepare('SELECT * FROM user WHERE id = ?');
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        while ($value = $result->fetch_assoc()){
            $old_name = $value['Nom'];
            $old_email = $value['email'];
        }

        ?>

        <div id="content">
        <form action="./edit.php?id=<?=$id?>" method="POST" >
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" >name</label>
            <input type="text" class="form-control" name="Nom" id="name" value="<?= $old_name?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">passwords</label>
            <input type="password" class="form-control"  name="passwords" id="passwords" value ="******">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">email</label>
            <input type="email" class="form-control"  name="email" id="email" value ="<?=$old_email?>">
        </div>
       
        
       
        <button id="button" type="submit" class="btn btn-warning ">edit</button>
        </form>
        </div> 
         <?php
         $stmt->close();
         $cnx->close(); 
         ?>
</section>

    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/dashboardhome.js"></script>
    <script src="https://kit.fontawesome.com/e80051e55f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</html>
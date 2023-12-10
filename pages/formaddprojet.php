<?php 
include 'cnx.php';

?>

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
    <div id="content" >
        <form action="./createprojet.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" >Title</label>
            <input type="text" class="form-control" name="Title" id="Title">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descriptions</label>
            <input type="text" class="form-control"  name="Descriptions" id="Descriptions">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">categories</label>
            <select class="py-2 w-100 bg-gray-200 text-gray-500 rounded-md" name="nomcat" id="nomcat">
                <option class="text-gray-500" disabled selected value="">Select le nom de categories</option>
                <?php
                $sql = "select * from categories;";
                $res = mysqli_query($cnx, $sql);
                if (mysqli_num_rows($res) > 0):
                    print_r($res);
                    while ($row = mysqli_fetch_assoc($res)) :
                        echo "<option value=" . $row['id'] . ">" . $row['nomcat'] . "</option>";
                    endwhile;
                endif;
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">user name</label>
            <select class="py-2 w-100 bg-gray-200 text-gray-500 rounded-md" name="iduser" id="iduser">
                <option class="text-gray-500" disabled selected value="">Select user name</option>
                <?php
                $sql = "select * from user;";
                $res = mysqli_query($cnx, $sql);
                if (mysqli_num_rows($res) > 0) :
                    print_r($res);
                    while ($row = mysqli_fetch_assoc($res)) :
                        echo "<option value=" . $row['id'] . ">" . $row['Nom'] . "</option>";
                    endwhile;
                endif;
                ?>
            </select>
            </div>
        <button id="button" type="submit" class="btn btn-primary ">Submit</button>
        </form>
    </div> 
</section>

    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/dashboardhome.js"></script>
    <script src="https://kit.fontawesome.com/e80051e55f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</html>
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
        <form action="./insertcat.php" method="POST" >
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" >name categories</label>
            <input type="text" class="form-control" name="nomcat" id="nomcat">
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
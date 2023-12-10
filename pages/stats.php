<?php 

require 'cnx.php';


$sql = "SELECT COUNT(*) AS user FROM user";
$user = mysqli_query($cnx, $sql);
$sql = "SELECT COUNT(*) AS Projets FROM Projets";
$project = mysqli_query($cnx, $sql);
$sql = "SELECT COUNT(*) AS freelances FROM freelances";
$freelance = mysqli_query($cnx, $sql);
$sql = "SELECT COUNT(*) AS Temoignages FROM Temoignages";
$testimonial = mysqli_query($cnx, $sql);
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
</style>
<body>
<?php include '../component/slidbar.php'?>
<h1 class="users-header">statistiques</h1>


<div class="row p-4">
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body  p-4">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div>
                                        <p class="mb-0">Projects</p>
                                        <div class="mt-4">
                                            <h3><strong><?= mysqli_fetch_assoc($project)['Projets'] ?></strong></h3>

                                        </div>
                                    </div>
                                    <div class="cursor">
                                    <i class="fa-solid fa-folder"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div>
                                        <p class="mb-0">Cliens</p>
                                        <div class="mt-4">
                                            <h3><strong><?= mysqli_fetch_assoc($user)['user'] ?></strong></h3>

                                        </div>
                                    </div>
                                    <div class="">
                                    <i class="fa-solid fa-user"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div>
                                        <p class="mb-0">Freelance</p>
                                        <div class="mt-4">
                                            <h3><strong><?= mysqli_fetch_assoc($freelance)['freelances'] ?></strong></h3>

                                        </div>
                                    </div>
                                    <div class="">
                                    <i class="fa-solid fa-screwdriver-wrench"></i>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div>
                                        <p class="mb-0">testimonials</p>
                                        <div class="mt-4">
                                            <h3><strong><?= mysqli_fetch_assoc($testimonial)['Temoignages'] ?></strong></h3>

                                        </div>
                                    </div>
                                    <div class="">
                                    <i class="fa-regular fa-comment"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

    

















    <script src="https://kit.fontawesome.com/e80051e55f.js" crossorigin="anonymous"></script>
    <script src="../js/dashboardusers.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="../js/dashboardhome.js"></script>
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
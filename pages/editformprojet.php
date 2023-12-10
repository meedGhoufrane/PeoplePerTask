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
    .form {
        width: 60%;
        display: flex;
    }

    form {
        padding-left: 17rem;
    }

    #button {
        margin-top: 5rem;
    }
</style>
<body>
    <?php include '../component/slidbar.php'?>
    <section class="form">

        <?php
        include 'cnx.php';

        $id = $_GET['id'];

        $stmt = $cnx->prepare('SELECT * FROM Projets WHERE id = ?');
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        while ($value = $result->fetch_assoc()) {
            $old_id = $value['id'];
            $old_Titre = $value['Titre'];
            $old_Descriptions = $value['Descriptions'];
            $old_idcat = $value['idcat'];
            $old_iduser = $value['iduser'];
        }
        ?>
        <div id="content" >
            <form action="./editprojet.php?id=<?= $old_id ?>" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input type="text" class="form-control" name="Title" id="Title" value='<?= $old_Titre ?>'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Descriptions</label>
                    <input type="text" class="form-control" name="Descriptions" id="Descriptions"
                        value="<?= $old_Descriptions ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">categories</label>
                    <select class="py-2 w-100 bg-gray-200 text-gray-500 rounded-md" name="idcat" id="idcat">
                        <?php
                        $sql = "SELECT * FROM categories;";
                        $res = mysqli_query($cnx, $sql);
                        if (mysqli_num_rows($res) > 0):
                            while ($row = mysqli_fetch_assoc($res)):
                                $selected = ($row['id'] == $old_idcat) ? 'selected' : '';
                                echo "<option value=" . $row['id'] . " $selected>" . $row['nomcat'] . "</option>";
                            endwhile;
                        endif;
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">user name</label>
                    <select class="py-2 w-100 bg-gray-200 text-gray-500 rounded-md" name="iduser" id="iduser">
                        <?php
                        $sql = "SELECT * FROM user;";
                        $res = mysqli_query($cnx, $sql);
                        if (mysqli_num_rows($res) > 0) :
                            while ($row = mysqli_fetch_assoc($res)) :
                                $selected = ($row['id'] == $old_iduser) ? 'selected' : '';
                                echo "<option value=" . $row['id'] . " $selected>" . $row['Nom'] . "</option>";
                            endwhile;
                        endif;
                        ?>
                    </select>
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
</body>
</html>

<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Class Edit</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Class Edit
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $class_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM class WHERE CLASS_CODE='$class_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $class = mysqli_fetch_array($query_run);
                        ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="CLASS_CODE" value="<?= $class['CLASS_CODE']; ?>">

                                    <div class="mb-3">
                                        <label>CLASS_SECTION</label>
                                        <input type="text" name="CLASS_SECTION" value="<?= $class['CLASS_SECTION']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>CLASS_TIME</label>
                                        <input type="text" name="CLASS_TIME" value="<?= $class['CLASS_TIME']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>CRS_CODE</label>
                                        <input type="text" name="CRS_CODE" value="<?= $class['CRS_CODE']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>PROF_NUM</label>
                                        <input type="text" name="PROF_NUM" value="<?= $class['PROF_NUM']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>ROOM_CODE</label>
                                        <input type="text" name="ROOM_CODE" value="<?= $class['ROOM_CODE']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>SEMESTER_CODE</label>
                                        <input type="text" name="SEMESTER_CODE" value="<?= $class['SEMESTER_CODE']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_class" class="btn btn-primary">
                                            Update Class
                                        </button>
                                    </div>

                                </form>
                        <?php
                            } else {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
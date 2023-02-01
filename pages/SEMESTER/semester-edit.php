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

    <title>Semester Edit</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Semester Edit
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $semester_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM semester WHERE SEMESTER_CODE='$semester_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $semester = mysqli_fetch_array($query_run);
                        ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="SEMESTER_CODE" value="<?= $semester['SEMESTER_CODE']; ?>">

                                    <div class="mb-3">
                                        <label>SEMESTER_YEAR</label>
                                        <input type="text" name="SEMESTER_YEAR" value="<?= $semester['SEMESTER_YEAR']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>SEMESTER_TERM</label>
                                        <input type="text" name="SEMESTER_TERM" value="<?= $semester['SEMESTER_TERM']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>SEMESTER_START_DATE</label>
                                        <input type="text" name="SEMESTER_START_DATE" value="<?= $semester['SEMESTER_START_DATE']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>SEMESTER_END_DATE</label>
                                        <input type="text" name="SEMESTER_END_DATE" value="<?= $semester['SEMESTER_END_DATE']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_semester" class="btn btn-primary">
                                            Update Semester
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
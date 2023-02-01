<?php
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

    <title>Semester View</title>
</head>

<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Semester View Details
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

                                <div class="mb-3">
                                    <label>SEMESTER_CODE</label>
                                    <p class="form-control">
                                        <?= $semester['SEMESTER_CODE']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>SEMESTER_YEAR</label>
                                    <p class="form-control">
                                        <?= $semester['SEMESTER_YEAR']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>SEMESTER_TERM</label>
                                    <p class="form-control">
                                        <?= $semester['SEMESTER_TERM']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>SEMESTER_START_DATE</label>
                                    <p class="form-control">
                                        <?= $semester['SEMESTER_START_DATE']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>SEMESTER_END_DATE</label>
                                    <p class="form-control">
                                        <?= $semester['SEMESTER_END_DATE']; ?>
                                    </p>
                                </div>

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
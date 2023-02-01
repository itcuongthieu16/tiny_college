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

    <title>Professor View</title>
</head>

<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Professor View Details
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $professor_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM professor WHERE PROF_NUM='$professor_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $professor = mysqli_fetch_array($query_run);
                        ?>

                                <div class="mb-3">
                                    <label>PROF_NUM</label>
                                    <p class="form-control">
                                        <?= $professor['PROF_NUM']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>PROF_EXTENSION</label>
                                    <p class="form-control">
                                        <?= $professor['PROF_EXTENSION']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>PROF_SPECIALTY</label>
                                    <p class="form-control">
                                        <?= $professor['PROF_SPECIALTY']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>PROF_RANK</label>
                                    <p class="form-control">
                                        <?= $professor['PROF_RANK']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>PROF_LNAME</label>
                                    <p class="form-control">
                                        <?= $professor['PROF_LNAME']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>PROF_FNAME</label>
                                    <p class="form-control">
                                        <?= $professor['PROF_FNAME']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>PROF_INITIAL</label>
                                    <p class="form-control">
                                        <?= $professor['PROF_INITIAL']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>PROF_EMAIL</label>
                                    <p class="form-control">
                                        <?= $professor['PROF_EMAIL']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>PROF_HIGH_DEGREE</label>
                                    <p class="form-control">
                                        <?= $professor['PROF_HIGH_DEGREE']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>DEPT_CODE</label>
                                    <p class="form-control">
                                        <?= $professor['DEPT_CODE']; ?>
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
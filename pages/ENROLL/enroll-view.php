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

    <title>Enroll View</title>
</head>

<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Enroll View Details
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $enroll_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM enroll WHERE CLASS_CODE='$enroll_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $department = mysqli_fetch_array($query_run);
                        ?>

                                <div class="mb-3">
                                    <label>CLASS_CODE</label>
                                    <p class="form-control">
                                        <?= $department['CLASS_CODE']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>STU_NUM</label>
                                    <p class="form-control">
                                        <?= $department['STU_NUM']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>ENROLL_DATE</label>
                                    <p class="form-control">
                                        <?= $department['ENROLL_DATE']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>ENROLL_GRADE</label>
                                    <p class="form-control">
                                        <?= $department['ENROLL_GRADE']; ?>
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
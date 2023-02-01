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

    <title>Department View</title>
</head>

<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Department View Details
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $department_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM department WHERE DEPT_CODE='$department_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $department = mysqli_fetch_array($query_run);
                        ?>

                                <div class="mb-3">
                                    <label>DEPT_CODE</label>
                                    <p class="form-control">
                                        <?= $department['DEPT_CODE']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>DEPT_NAME</label>
                                    <p class="form-control">
                                        <?= $department['DEPT_NAME']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>DEPT_ADDRESS</label>
                                    <p class="form-control">
                                        <?= $department['DEPT_ADDRESS']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>DEPT_EXTENSION</label>
                                    <p class="form-control">
                                        <?= $department['DEPT_EXTENSION']; ?>
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
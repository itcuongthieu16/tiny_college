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

    <title>Student View</title>
</head>

<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student View Details
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM student WHERE STU_NUM='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $student = mysqli_fetch_array($query_run);
                        ?>

                                <div class="mb-3">
                                    <label>STU_NUM</label>
                                    <p class="form-control">
                                        <?= $student['STU_NUM']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>STU_LNAME</label>
                                    <p class="form-control">
                                        <?= $student['STU_LNAME']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>STU_FNAME</label>
                                    <p class="form-control">
                                        <?= $student['STU_FNAME']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>STU_INIT</label>
                                    <p class="form-control">
                                        <?= $student['STU_INIT']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>STU_DOB</label>
                                    <p class="form-control">
                                        <?= $student['STU_DOB']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>STU_HRS</label>
                                    <p class="form-control">
                                        <?= $student['STU_HRS']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>STU_CLASS</label>
                                    <p class="form-control">
                                        <?= $student['STU_CLASS']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>STU_GPA</label>
                                    <p class="form-control">
                                        <?= $student['STU_GPA']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>STU_TRANSFER</label>
                                    <p class="form-control">
                                        <?= $student['STU_TRANSFER']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>STU_PHONE</label>
                                    <p class="form-control">
                                        <?= $student['STU_PHONE']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>DEPT_CODE</label>
                                    <p class="form-control">
                                        <?= $student['DEPT_CODE']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>PROF_NUM</label>
                                    <p class="form-control">
                                        <?= $student['PROF_NUM']; ?>
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
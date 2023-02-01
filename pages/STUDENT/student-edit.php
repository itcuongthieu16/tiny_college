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

    <title>Student Edit</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Edit
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
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="STU_NUM" value="<?= $student['STU_NUM']; ?>">

                                    <div class="mb-3">
                                        <label>STU_LNAME</label>
                                        <input type="text" name="STU_LNAME" value="<?= $student['STU_LNAME']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>STU_FNAME</label>
                                        <input type="text" name="STU_FNAME" value="<?= $student['STU_FNAME']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>STU_INIT</label>
                                        <input type="text" name="STU_INIT" value="<?= $student['STU_INIT']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>STU_DOB</label>
                                        <input type="text" name="STU_DOB" value="<?= $student['STU_DOB']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>STU_HRS</label>
                                        <input type="text" name="STU_HRS" value="<?= $student['STU_HRS']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>STU_CLASS</label>
                                        <input type="text" name="STU_CLASS" value="<?= $student['STU_CLASS']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>STU_GPA</label>
                                        <input type="text" name="STU_GPA" value="<?= $student['STU_GPA']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>STU_TRANSFER</label>
                                        <input type="text" name="STU_TRANSFER" value="<?= $student['STU_TRANSFER']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>STU_PHONE</label>
                                        <input type="text" name="STU_PHONE" value="<?= $student['STU_PHONE']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>DEPT_CODE</label>
                                        <input type="text" name="DEPT_CODE" value="<?= $student['DEPT_CODE']; ?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>PROF_NUM</label>
                                        <input type="text" name="PROF_NUM" value="<?= $student['PROF_NUM']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_student" class="btn btn-primary">
                                            Update Student
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
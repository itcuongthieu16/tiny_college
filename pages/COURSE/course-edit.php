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

    <title>Course Edit</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Course Edit
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $course_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM course WHERE CRS_CODE='$course_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $course = mysqli_fetch_array($query_run);
                        ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="CRS_CODE" value="<?= $course['CRS_CODE']; ?>">

                                    <div class="mb-3">
                                        <label>CRS_DESCRIPTION</label>
                                        <input type="text" name="CRS_DESCRIPTION" value="<?= $course['CRS_DESCRIPTION']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>CRS_CREDIT</label>
                                        <input type="text" name="CRS_CREDIT" value="<?= $course['CRS_CREDIT']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>DEPT_CODE</label>
                                        <input type="text" name="DEPT_CODE" value="<?= $course['DEPT_CODE']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_course" class="btn btn-primary">
                                            Update Course
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
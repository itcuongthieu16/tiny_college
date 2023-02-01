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

    <title>Department Edit</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Department Edit
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
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="DEPT_CODE" value="<?= $department['DEPT_CODE']; ?>">

                                    <div class="mb-3">
                                        <label>DEPT_NAME</label>
                                        <input type="text" name="DEPT_NAME" value="<?= $department['DEPT_NAME']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>DEPT_ADDRESS</label>
                                        <input type="text" name="DEPT_ADDRESS" value="<?= $department['DEPT_ADDRESS']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>DEPT_EXTENSION</label>
                                        <input type="text" name="DEPT_EXTENSION" value="<?= $department['DEPT_EXTENSION']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>SCHOOL_CODE</label>
                                        <input type="text" name="SCHOOL_CODE" value="<?= $department['SCHOOL_CODE']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>PROF_NUM</label>
                                        <input type="text" name="PROF_NUM" value="<?= $department['PROF_NUM']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_department" class="btn btn-primary">
                                            Update Department
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
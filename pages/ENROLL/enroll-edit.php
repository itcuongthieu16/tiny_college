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

    <title>Enroll Edit</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Enroll Edit
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
                                $enroll = mysqli_fetch_array($query_run);
                        ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="CLASS_CODE" value="<?= $enroll['CLASS_CODE']; ?>">

                                    <div class="mb-3">
                                        <label>DEPT_NAME</label>
                                        <input type="text" name="STU_NUM" value="<?= $enroll['STU_NUM']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>DEPT_ADDRESS</label>
                                        <input type="text" name="ENROLL_DATE" value="<?= $enroll['ENROLL_DATE']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>DEPT_EXTENSION</label>
                                        <input type="text" name="ENROLL_GRADE" value="<?= $enroll['ENROLL_GRADE']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_enroll" class="btn btn-primary">
                                            Update Enroll
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
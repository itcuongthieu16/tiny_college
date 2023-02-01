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

    <title>Professor Edit</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Professor Edit
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
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="PROF_NUM" value="<?= $professor['PROF_NUM']; ?>">

                                    <div class="mb-3">
                                        <label>PROF_EXTENSION</label>
                                        <input type="text" name="PROF_EXTENSION" value="<?= $professor['PROF_EXTENSION']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>PROF_SPECIALTY</label>
                                        <input type="text" name="PROF_SPECIALTY" value="<?= $professor['PROF_SPECIALTY']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>PROF_RANK</label>
                                        <input type="text" name="PROF_RANK" value="<?= $professor['PROF_RANK']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>PROF_LNAME</label>
                                        <input type="text" name="PROF_LNAME" value="<?= $professor['PROF_LNAME']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>PROF_FNAME</label>
                                        <input type="text" name="PROF_FNAME" value="<?= $professor['PROF_FNAME']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>PROF_INITIAL</label>
                                        <input type="text" name="PROF_INITIAL" value="<?= $professor['PROF_INITIAL']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>PROF_EMAIL</label>
                                        <input type="text" name="PROF_EMAIL" value="<?= $professor['PROF_EMAIL']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>PROF_HIGH_DEGREE</label>
                                        <input type="text" name="PROF_HIGH_DEGREE" value="<?= $professor['PROF_HIGH_DEGREE']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>DEPT_CODE</label>
                                        <input type="text" name="DEPT_CODE" value="<?= $professor['DEPT_CODE']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_professor" class="btn btn-primary">
                                            Update Professor
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
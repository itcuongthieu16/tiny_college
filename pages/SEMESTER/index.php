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

    <title>Semester CRUD</title>
</head>

<body>

    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>.
                            <a href="../../index.php" class="btn btn-primary float-end">MENU</a>
                        </h4>
                    </div>
                    <div class="card-header">
                        <h4>Semester Details
                            <a href="semester-create.php" class="btn btn-primary float-end">Add Semesters</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>SEMESTER_CODE</th>
                                    <th>SEMESTER_YEAR</th>
                                    <th>SEMESTER_TERM</th>
                                    <th>SEMESTER_START_DATE</th>
                                    <th>SEMESTER_END_DATE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM semester";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $semester) {
                                ?>
                                        <tr>
                                            <td><?= $semester['SEMESTER_CODE']; ?></td>
                                            <td><?= $semester['SEMESTER_YEAR']; ?></td>
                                            <td><?= $semester['SEMESTER_TERM']; ?></td>
                                            <td><?= $semester['SEMESTER_START_DATE']; ?></td>
                                            <td><?= $semester['SEMESTER_END_DATE']; ?></td>
                                            <td>
                                                <a href="semester-view.php?id=<?= $semester['SEMESTER_CODE']; ?>" class="btn btn-info btn-sm">View</a>
                                                <a href="semester-edit.php?id=<?= $semester['SEMESTER_CODE']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                <form action="code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_semester" value="<?= $semester['SEMESTER_CODE']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "<h5> No Record Found </h5>";
                                }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
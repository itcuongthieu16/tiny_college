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

    <title>School CRUD</title>
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
                        <h4>School Details
                            <a href="school-create.php" class="btn btn-primary float-end">Add Schools</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>SCHOOL_CODE</th>
                                    <th>SCHOOL_NAME</th>
                                    <th>PROF_NUM</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM school";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $school) {
                                ?>
                                        <tr>
                                            <td><?= $school['SCHOOL_CODE']; ?></td>
                                            <td><?= $school['SCHOOL_NAME']; ?></td>
                                            <td><?= $school['PROF_NUM']; ?></td>
                                            <td>
                                                <a href="school-view.php?id=<?= $school['SCHOOL_CODE']; ?>" class="btn btn-info btn-sm">View</a>
                                                <a href="school-edit.php?id=<?= $school['SCHOOL_CODE']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                <form action="code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_school" value="<?= $school['SCHOOL_CODE']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                                <a href="search-school.php" class="btn btn-warning btn-sm">Tìm kiếm</a>
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
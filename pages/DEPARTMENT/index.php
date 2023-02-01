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

    <title>Department CRUD</title>
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
                        <h4>Department Details
                            <a href="department-create.php" class="btn btn-primary float-end">Add Departments</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>DEPT_CODE</th>
                                    <th>DEPT_NAME</th>
                                    <th>DEPT_ADDRESS</th>
                                    <th>DEPT_EXTENSION</th>
                                    <th>SCHOOL_CODE</th>
                                    <th>PROF_NUM</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM department";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $department) {
                                ?>
                                        <tr>
                                            <td><?= $department['DEPT_CODE']; ?></td>
                                            <td><?= $department['DEPT_NAME']; ?></td>
                                            <td><?= $department['DEPT_ADDRESS']; ?></td>
                                            <td><?= $department['DEPT_EXTENSION']; ?></td>
                                            <td><?= $department['SCHOOL_CODE']; ?></td>
                                            <td><?= $department['PROF_NUM']; ?></td>

                                            <td>
                                                <a href="department-view.php?id=<?= $department['DEPT_CODE']; ?>" class="btn btn-info btn-sm">View</a>
                                                <a href="department-edit.php?id=<?= $department['DEPT_CODE']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                <form action="code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_department" value="<?= $department['DEPT_CODE']; ?>" class="btn btn-danger btn-sm">Delete</button>
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
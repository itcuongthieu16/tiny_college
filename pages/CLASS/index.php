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

    <title>Class CRUD</title>
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
                        <h4>Class Details
                            <a href="class-create.php" class="btn btn-primary float-end">Add Classes</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>CLASS_CODE</th>
                                    <th>CLASS_SECTION</th>
                                    <th>CLASS_TIME</th>
                                    <th>CRS_CODE</th>
                                    <th>PROF_NUM</th>
                                    <th>ROOM_CODE</th>
                                    <th>SEMESTER_CODE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM class";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $class) {
                                ?>
                                        <tr>
                                            <td><?= $class['CLASS_CODE']; ?></td>
                                            <td><?= $class['CLASS_SECTION']; ?></td>
                                            <td><?= $class['CLASS_TIME']; ?></td>
                                            <td><?= $class['CRS_CODE']; ?></td>
                                            <td><?= $class['PROF_NUM']; ?></td>
                                            <td><?= $class['ROOM_CODE']; ?></td>
                                            <td><?= $class['SEMESTER_CODE']; ?></td>

                                            <td>
                                                <a href="class-view.php?id=<?= $class['CLASS_CODE']; ?>" class="btn btn-info btn-sm">View</a>
                                                <a href="class-edit.php?id=<?= $class['CLASS_CODE']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                <form action="code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_class" value="<?= $class['CLASS_CODE']; ?>" class="btn btn-danger btn-sm">Delete</button>
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
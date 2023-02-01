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

    <title>Professor CRUD</title>
</head>

<body>

    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <div class="card-header" style="margin-left: 15px;">
                        <h4>.
                            <a href="../../index.php" class="btn btn-primary float-end">MENU</a>
                        </h4>
                    </div>
                    <div class="card-header" style="margin-left: 15px;">
                        <h4>Professor Details
                            <a href="professor-create.php" class="btn btn-primary float-end">Add Professors</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>PROF_NUM</th>
                                    <th>PROF_EXTENSION</th>
                                    <th>PROF_SPECIALTY</th>
                                    <th>PROF_RANK</th>
                                    <th>PROF_LNAME</th>
                                    <th>PROF_FNAME</th>
                                    <th>PROF_INITIAL</th>
                                    <th>PROF_EMAIL</th>
                                    <th>PROF_HIGH_DEGREE</th>
                                    <th>DEPT_CODE</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM professor";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $professor) {
                                ?>
                                        <tr>
                                            <td><?= $professor['PROF_NUM']; ?></td>
                                            <td><?= $professor['PROF_EXTENSION']; ?></td>
                                            <td><?= $professor['PROF_SPECIALTY']; ?></td>
                                            <td><?= $professor['PROF_RANK']; ?></td>
                                            <td><?= $professor['PROF_LNAME']; ?></td>
                                            <td><?= $professor['PROF_FNAME']; ?></td>
                                            <td><?= $professor['PROF_INITIAL']; ?></td>
                                            <td><?= $professor['PROF_EMAIL']; ?></td>
                                            <td><?= $professor['PROF_HIGH_DEGREE']; ?></td>
                                            <td><?= $professor['DEPT_CODE']; ?></td>


                                            <td>
                                                <a href="professor-view.php?id=<?= $professor['PROF_NUM']; ?>" class="btn btn-info btn-sm">View</a>
                                                <a href="professor-edit.php?id=<?= $professor['PROF_NUM']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                <form action="code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_professor" value="<?= $professor['PROF_NUM']; ?>" class="btn btn-danger btn-sm">Delete</button>
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
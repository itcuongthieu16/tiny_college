<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Create</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Add
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>STU_NUM</label>
                                <input type="text" name="STU_NUM" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>STU_LNAME</label>
                                <input type="text" name="STU_LNAME" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>STU_FNAME</label>
                                <input type="text" name="STU_FNAME" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>STU_INIT</label>
                                <input type="text" name="STU_INIT" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>STU_DOB</label>
                                <input type="text" name="STU_DOB" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>STU_HRS</label>
                                <input type="text" name="STU_HRS" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>STU_CLASS</label>
                                <input type="text" name="STU_CLASS" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>STU_GPA</label>
                                <input type="text" name="STU_GPA" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>STU_TRANSFER</label>
                                <input type="text" name="STU_TRANSFER" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>STU_PHONE</label>
                                <input type="text" name="STU_PHONE" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>DEPT_CODE</label>
                                <input type="text" name="DEPT_CODE" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>PROF_NUM</label>
                                <input type="text" name="PROF_NUM" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
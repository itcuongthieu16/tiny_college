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

    <title>Department Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Department Add 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>DEPT_CODE</label>
                                <input type="text" name="DEPT_CODE" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>DEPT_NAME</label>
                                <input type="text" name="DEPT_NAME" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>DEPT_ADDRESS</label>
                                <input type="text" name="DEPT_ADDRESS" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>DEPT_EXTENSION</label>
                                <input type="text" name="DEPT_EXTENSION" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>SCHOOL_CODE</label>
                                <input type="text" name="SCHOOL_CODE" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>PROF_NUM</label>
                                <input type="text" name="PROF_NUM" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_department" class="btn btn-primary">Save Department</button>
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
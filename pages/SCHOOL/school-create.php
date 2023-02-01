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

    <title>School Create</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>School Add
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>SCHOOL_CODE</label>
                                <input type="text" name="SCHOOL_CODE" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>SCHOOL_NAME</label>
                                <input type="text" name="SCHOOL_NAME" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>PROF_NUM</label>
                                <input type="text" name="PROF_NUM" class="form-control">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="save_school" class="btn btn-primary">Save School</button>
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
<?php
session_start();
require 'dbcon.php';

if (isset($_POST['delete_semester'])) {
    $semester_id = mysqli_real_escape_string($con, $_POST['delete_semester']);

    $query = "DELETE FROM semester WHERE SEMESTER_CODE='$semester_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Semester Deleted Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Semester Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['update_semester'])) {
    $semester_code = mysqli_real_escape_string($con, $_POST['SEMESTER_CODE']);
    $semester_year = mysqli_real_escape_string($con, $_POST['SEMESTER_YEAR']);
    $semester_term = mysqli_real_escape_string($con, $_POST['SEMESTER_TERM']);
    $semester_start_date = mysqli_real_escape_string($con, $_POST['SEMESTER_START_DATE']);
    $semester_end_date = mysqli_real_escape_string($con, $_POST['SEMESTER_END_DATE']);

    $query = "UPDATE semester SET SEMESTER_CODE='$semester_code', SEMESTER_YEAR='$semester_year', SEMESTER_TERM='$semester_term', SEMESTER_START_DATE='$semester_start_date', SEMESTER_END_DATE='$semester_end_date' WHERE SEMESTER_CODE='$semester_code' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Semester Updated Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Semester Not Updated";
        header("Location: index.php");
        exit(0);
    }
}


if (isset($_POST['save_semester'])) {
    $semester_code = mysqli_real_escape_string($con, $_POST['SEMESTER_CODE']);
    $semester_year = mysqli_real_escape_string($con, $_POST['SEMESTER_YEAR']);
    $semester_term = mysqli_real_escape_string($con, $_POST['SEMESTER_TERM']);
    $semester_start_date = mysqli_real_escape_string($con, $_POST['SEMESTER_START_DATE']);
    $semester_end_date = mysqli_real_escape_string($con, $_POST['SEMESTER_END_DATE']);

    $query = "INSERT INTO semester (SEMESTER_CODE,SEMESTER_YEAR,SEMESTER_TERM,SEMESTER_START_DATE,SEMESTER_END_DATE) VALUES ('$semester_code','$semester_year','$semester_term','$semester_start_date','$semester_end_date')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Semester Created Successfully";
        header("Location: semester-create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Semester Not Created";
        header("Location: semester-create.php");
        exit(0);
    }
}

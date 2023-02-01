<?php
session_start();
require 'dbcon.php';

if (isset($_POST['delete_course'])) {
    $course_id = mysqli_real_escape_string($con, $_POST['delete_course']);

    $query = "DELETE FROM course WHERE CRS_CODE='$course_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Course Deleted Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Course Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['update_course'])) {
    $crs_code = mysqli_real_escape_string($con, $_POST['CRS_CODE']);
    $crs_description = mysqli_real_escape_string($con, $_POST['CRS_DESCRIPTION']);
    $crs_credit = mysqli_real_escape_string($con, $_POST['CRS_CREDIT']);
    $dept_code = mysqli_real_escape_string($con, $_POST['DEPT_CODE']);

    $query = "UPDATE course SET CRS_CODE='$crs_code', CRS_DESCRIPTION='$crs_description', CRS_CREDIT='$crs_credit', DEPT_CODE='$dept_code' WHERE CRS_CODE='$crs_code' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Course Updated Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Course Not Updated";
        header("Location: index.php");
        exit(0);
    }
}


if (isset($_POST['save_course'])) {
    $crs_code = mysqli_real_escape_string($con, $_POST['CRS_CODE']);
    $crs_description = mysqli_real_escape_string($con, $_POST['CRS_DESCRIPTION']);
    $crs_credit = mysqli_real_escape_string($con, $_POST['CRS_CREDIT']);
    $dept_code = mysqli_real_escape_string($con, $_POST['DEPT_CODE']);

    $query = "INSERT INTO course (CRS_CODE,CRS_DESCRIPTION,CRS_CREDIT,DEPT_CODE) VALUES ('$crs_code','$crs_description','$crs_credit','$dept_code')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Course Created Successfully";
        header("Location: course-create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Course Not Created";
        header("Location: course-create.php");
        exit(0);
    }
}

<?php
session_start();
require 'dbcon.php';

if (isset($_POST['delete_class'])) {
    $class_id = mysqli_real_escape_string($con, $_POST['delete_class']);

    $query = "DELETE FROM class WHERE CLASS_CODE='$class_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Class Deleted Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Class Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['update_class'])) {
    $class_code = mysqli_real_escape_string($con, $_POST['CLASS_CODE']);
    $class_section = mysqli_real_escape_string($con, $_POST['CLASS_SECTION']);
    $class_time = mysqli_real_escape_string($con, $_POST['CLASS_TIME']);
    $crs_code = mysqli_real_escape_string($con, $_POST['CRS_CODE']);
    $prof_num = mysqli_real_escape_string($con, $_POST['PROF_NUM']);
    $room_code = mysqli_real_escape_string($con, $_POST['ROOM_CODE']);
    $semester_code = mysqli_real_escape_string($con, $_POST['SEMESTER_CODE']);



    $query = "UPDATE class SET CLASS_CODE='$class_code', CLASS_SECTION='$class_section', CLASS_TIME='$class_time', CRS_CODE='$crs_code', PROF_NUM='$prof_num', ROOM_CODE='$room_code',SEMESTER_CODE='$semester_code'  WHERE CLASS_CODE='$class_code' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Class Updated Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Class Not Updated";
        header("Location: index.php");
        exit(0);
    }
}


if (isset($_POST['save_class'])) {
    $class_code = mysqli_real_escape_string($con, $_POST['CLASS_CODE']);
    $class_section = mysqli_real_escape_string($con, $_POST['CLASS_SECTION']);
    $class_time = mysqli_real_escape_string($con, $_POST['CLASS_TIME']);
    $crs_code = mysqli_real_escape_string($con, $_POST['CRS_CODE']);
    $prof_num = mysqli_real_escape_string($con, $_POST['PROF_NUM']);
    $room_code = mysqli_real_escape_string($con, $_POST['ROOM_CODE']);
    $semester_code = mysqli_real_escape_string($con, $_POST['SEMESTER_CODE']);

    $query = "INSERT INTO class (CLASS_CODE,CLASS_SECTION,CLASS_TIME,CRS_CODE,PROF_NUM,ROOM_CODE,SEMESTER_CODE) VALUES ('$class_code','$class_section','$class_time','$crs_code','$prof_num', '$room_code', '$semester_code')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Class Created Successfully";
        header("Location: class-create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Class Not Created";
        header("Location: class-create.php");
        exit(0);
    }
}

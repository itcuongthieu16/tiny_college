<?php
session_start();
require 'dbcon.php';

if (isset($_POST['delete_department'])) {
    $department_id = mysqli_real_escape_string($con, $_POST['delete_department']);

    $query = "DELETE FROM deparment WHERE DEPT_CODE='$department_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Department Deleted Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Department Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['update_department'])) {
    $dept_code = mysqli_real_escape_string($con, $_POST['DEPT_CODE']);
    $dept_name = mysqli_real_escape_string($con, $_POST['DEPT_NAME']);
    $dept_address = mysqli_real_escape_string($con, $_POST['DEPT_ADDRESS']);
    $dept_extension = mysqli_real_escape_string($con, $_POST['DEPT_EXTENSION']);
    $school_code = mysqli_real_escape_string($con, $_POST['SCHOOL_CODE']);
    $prof_num = mysqli_real_escape_string($con, $_POST['PROF_NUM']);

    $query = "UPDATE department SET DEPT_CODE='$dept_code', DEPT_NAME='$dept_name', DEPT_ADDRESS='$dept_address', DEPT_EXTENSION='$dept_extension', SCHOOL_CODE='$school_code',PROF_NUM='$prof_num'  WHERE DEPT_CODE='$dept_code' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Department Updated Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Department Not Updated";
        header("Location: index.php");
        exit(0);
    }
}


if (isset($_POST['save_department'])) {
    $dept_code = mysqli_real_escape_string($con, $_POST['DEPT_CODE']);
    $dept_name = mysqli_real_escape_string($con, $_POST['DEPT_NAME']);
    $dept_address = mysqli_real_escape_string($con, $_POST['DEPT_ADDRESS']);
    $dept_extension = mysqli_real_escape_string($con, $_POST['DEPT_EXTENSION']);
    $school_code = mysqli_real_escape_string($con, $_POST['SCHOOL_CODE']);
    $prof_num = mysqli_real_escape_string($con, $_POST['PROF_NUM']);

    $query = "INSERT INTO department (DEPT_CODE,DEPT_NAME,DEPT_ADDRESS,DEPT_EXTENSION,SCHOOL_CODE,PROF_NUM) VALUES ('$dept_code','$dept_name','$dept_address','$dept_extension','$school_code','$prof_num')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Department Created Successfully";
        header("Location: department-create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Department Not Created";
        header("Location: department-create.php");
        exit(0);
    }
}

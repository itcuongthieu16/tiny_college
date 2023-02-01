<?php
session_start();
require 'dbcon.php';

if (isset($_POST['delete_enroll'])) {
    $enroll_id = mysqli_real_escape_string($con, $_POST['delete_enroll']);

    $query = "DELETE FROM enroll WHERE DEPT_CODE='$enroll_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Enroll Deleted Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Enroll Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['update_enroll'])) {
    $class_code = mysqli_real_escape_string($con, $_POST['CLASS_CODE']);
    $stu_num = mysqli_real_escape_string($con, $_POST['STU_NUM']);
    $enroll_date = mysqli_real_escape_string($con, $_POST['ENROLL_DATE']);
    $enroll_grade = mysqli_real_escape_string($con, $_POST['ENROLL_GRADE']);

    $query = "UPDATE enroll SET CLASS_CODE='$class_code', STU_NUM='$stu_num', ENROLL_DATE='$enroll_date', ENROLL_GRADE='$enroll_grade' WHERE CLASS_CODE='$class_code' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Enroll Updated Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Enroll Not Updated";
        header("Location: index.php");
        exit(0);
    }
}


if (isset($_POST['save_enroll'])) {
    $class_code = mysqli_real_escape_string($con, $_POST['CLASS_CODE']);
    $stu_num = mysqli_real_escape_string($con, $_POST['STU_NUM']);
    $enroll_date = mysqli_real_escape_string($con, $_POST['ENROLL_DATE']);
    $enroll_grade = mysqli_real_escape_string($con, $_POST['ENROLL_GRADE']);

    $query = "INSERT INTO enroll (CLASS_CODE,STU_NUM,ENROLL_DATE,ENROLL_GRADE) VALUES ('$class_code','$stu_num','$enroll_date','$enroll_grade')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Enroll Created Successfully";
        header("Location: enroll-create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Enroll Not Created";
        header("Location: enroll-create.php");
        exit(0);
    }
}

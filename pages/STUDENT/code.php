<?php
session_start();
require 'dbcon.php';

if (isset($_POST['delete_student'])) {
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM student WHERE STU_NUM='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['update_student'])) {
    $stu_num = mysqli_real_escape_string($con, $_POST['STU_NUM']);
    $stu_lname = mysqli_real_escape_string($con, $_POST['STU_LNAME']);
    $stu_fname = mysqli_real_escape_string($con, $_POST['STU_FNAME']);
    $stu_init = mysqli_real_escape_string($con, $_POST['STU_INIT']);
    $stu_dob = mysqli_real_escape_string($con, $_POST['STU_DOB']);
    $stu_hrs = mysqli_real_escape_string($con, $_POST['STU_HRS']);
    $stu_class = mysqli_real_escape_string($con, $_POST['STU_CLASS']);
    $stu_gpa = mysqli_real_escape_string($con, $_POST['STU_GPA']);
    $stu_transfer = mysqli_real_escape_string($con, $_POST['STU_TRANSFER']);
    $stu_phone = mysqli_real_escape_string($con, $_POST['STU_PHONE']);
    $dept_code = mysqli_real_escape_string($con, $_POST['DEPT_CODE']);
    $prof_num = mysqli_real_escape_string($con, $_POST['PROF_NUM']);


    $query = "UPDATE student SET STU_NUM='$stu_num', STU_LNAME='$stu_lname', STU_FNAME='$stu_fname', STU_INIT='$stu_init', STU_DOB='$stu_dob', STU_HRS='$stu_hrs', STU_CLASS='$stu_class', STU_GPA='$stu_gpa', STU_TRANSFER='$stu_transfer', STU_PHONE='$stu_phone', DEPT_CODE='$dept_code', PROF_NUM='$prof_num' WHERE STU_NUM='$stu_num' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: index.php");
        exit(0);
    }
}


if (isset($_POST['save_student'])) {
    $stu_num = mysqli_real_escape_string($con, $_POST['STU_NUM']);
    $stu_lname = mysqli_real_escape_string($con, $_POST['STU_LNAME']);
    $stu_fname = mysqli_real_escape_string($con, $_POST['STU_FNAME']);
    $stu_init = mysqli_real_escape_string($con, $_POST['STU_INIT']);
    $stu_dob = mysqli_real_escape_string($con, $_POST['STU_DOB']);
    $stu_hrs = mysqli_real_escape_string($con, $_POST['STU_HRS']);
    $stu_class = mysqli_real_escape_string($con, $_POST['STU_CLASS']);
    $stu_gpa = mysqli_real_escape_string($con, $_POST['STU_GPA']);
    $stu_transfer = mysqli_real_escape_string($con, $_POST['STU_TRANSFER']);
    $stu_phone = mysqli_real_escape_string($con, $_POST['STU_PHONE']);
    $dept_code = mysqli_real_escape_string($con, $_POST['DEPT_CODE']);
    $prof_num = mysqli_real_escape_string($con, $_POST['PROF_NUM']);

    $query = "INSERT INTO student (STU_NUM, STU_LNAME, STU_FNAME, STU_INIT, STU_DOB, STU_HRS, STU_CLASS, STU_GPA, STU_TRANSFER, STU_PHONE, DEPT_CODE, PROF_NUM) VALUES ('$stu_num','$stu_lname','$stu_fname','$stu_init','$stu_dob','$stu_hrs','$stu_class','$stu_gpa','$stu_transfer','$stu_phone','$dept_code','$prof_num')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: student-create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

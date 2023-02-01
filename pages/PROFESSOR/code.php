<?php
session_start();
require 'dbcon.php';

if (isset($_POST['delete_professor'])) {
    $professor_id = mysqli_real_escape_string($con, $_POST['delete_professor']);

    $query = "DELETE FROM professor WHERE PROF_NUM='$professor_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Professor Deleted Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Professor Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['update_professor'])) {
    $prof_num = mysqli_real_escape_string($con, $_POST['PROF_NUM']);
    $prof_extension = mysqli_real_escape_string($con, $_POST['PROF_EXTENSION']);
    $prof_specialty = mysqli_real_escape_string($con, $_POST['PROF_SPECIALTY']);
    $prof_rank = mysqli_real_escape_string($con, $_POST['PROF_RANK']);
    $prof_lname = mysqli_real_escape_string($con, $_POST['PROF_LNAME']);
    $prof_fname = mysqli_real_escape_string($con, $_POST['PROF_FNAME']);
    $prof_initial = mysqli_real_escape_string($con, $_POST['PROF_INITIAL']);
    $prof_email = mysqli_real_escape_string($con, $_POST['PROF_EMAIL']);
    $prof_high_degree = mysqli_real_escape_string($con, $_POST['PROF_HIGH_DEGREE']);
    $dept_code = mysqli_real_escape_string($con, $_POST['DEPT_CODE']);


    $query = "UPDATE professor SET PROF_NUM='$prof_num', PROF_EXTENSION='$prof_extension', PROF_SPECIALTY='$prof_specialty', PROF_RANK='$prof_rank', PROF_LNAME='$prof_lname', PROF_FNAME='$prof_fname', PROF_INITIAL='$prof_initial', PROF_EMAIL='$prof_email', PROF_HIGH_DEGREE='$prof_high_degree', DEPT_CODE='$dept_code' WHERE PROF_NUM='$prof_num' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Professor Updated Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Professor Not Updated";
        header("Location: index.php");
        exit(0);
    }
}


if (isset($_POST['save_professor'])) {
    $prof_num = mysqli_real_escape_string($con, $_POST['PROF_NUM']);
    $prof_extension = mysqli_real_escape_string($con, $_POST['PROF_EXTENSION']);
    $prof_specialty = mysqli_real_escape_string($con, $_POST['PROF_SPECIALTY']);
    $prof_rank = mysqli_real_escape_string($con, $_POST['PROF_RANK']);
    $prof_lname = mysqli_real_escape_string($con, $_POST['PROF_LNAME']);
    $prof_fname = mysqli_real_escape_string($con, $_POST['PROF_FNAME']);
    $prof_initial = mysqli_real_escape_string($con, $_POST['PROF_INITIAL']);
    $prof_email = mysqli_real_escape_string($con, $_POST['PROF_EMAIL']);
    $prof_high_degree = mysqli_real_escape_string($con, $_POST['PROF_HIGH_DEGREE']);
    $dept_code = mysqli_real_escape_string($con, $_POST['DEPT_CODE']);

    $query = "INSERT INTO professor (PROF_NUM, PROF_EXTENSION, PROF_SPECIALTY, PROF_RANK, PROF_LNAME, PROF_FNAME, PROF_INITIAL, PROF_EMAIL, PROF_HIGH_DEGREE, DEPT_CODE, DEPT_CODE) VALUES ('$prof_num','$prof_extension','$prof_specialty','$prof_rank','$prof_lname','$prof_fname','$prof_initial','$prof_email','$prof_high_degree','$dept_code')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Professor Created Successfully";
        header("Location: professor-create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Professor Not Created";
        header("Location: professor-create.php");
        exit(0);
    }
}

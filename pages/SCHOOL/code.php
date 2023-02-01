<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_school']))
{
    $school_id = mysqli_real_escape_string($con, $_POST['delete_school']);

    $query = "DELETE FROM school WHERE SCHOOL_CODE='$school_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "School Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "School Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_school']))
{
    $school_code = mysqli_real_escape_string($con, $_POST['SCHOOL_CODE']);
    $school_name = mysqli_real_escape_string($con, $_POST['SCHOOL_NAME']);
    $prof_num = mysqli_real_escape_string($con, $_POST['PROF_NUM']);

    $query = "UPDATE school SET SCHOOL_CODE='$school_code', SCHOOL_NAME='$school_name', PROF_NUM='$prof_num' WHERE SCHOOL_CODE='$school_code' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "School Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "School Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_school']))
{
    $school_code = mysqli_real_escape_string($con, $_POST['SCHOOL_CODE']);
    $school_name = mysqli_real_escape_string($con, $_POST['SCHOOL_NAME']);
    $prof_num = mysqli_real_escape_string($con, $_POST['PROF_NUM']);

    $query = "INSERT INTO school (SCHOOL_CODE,SCHOOL_NAME,PROF_NUM) VALUES ('$school_code','$school_name','$prof_num')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "School Created Successfully";
        header("Location: school-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "School Not Created";
        header("Location: school-create.php");
        exit(0);
    }
}

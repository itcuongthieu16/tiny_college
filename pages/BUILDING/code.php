<?php
session_start();
require 'dbcon.php';

if (isset($_POST['delete_building'])) {
    $building_id = mysqli_real_escape_string($con, $_POST['delete_building']);

    $query = "DELETE FROM building WHERE BLDG_CODE='$building_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Building Deleted Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Building Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['update_building'])) {
    $bldg_code = mysqli_real_escape_string($con, $_POST['BLDG_CODE']);
    $bldg_name = mysqli_real_escape_string($con, $_POST['BLDG_NAME']);
    $bldg_location = mysqli_real_escape_string($con, $_POST['BLDG_LOCATION']);


    $query = "UPDATE building SET BLDG_CODE='$bldg_code', BLDG_NAME='$bldg_name', BLDG_LOCATION='$bldg_location' WHERE BLDG_CODE='$bldg_code' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Building Updated Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Building Not Updated";
        header("Location: index.php");
        exit(0);
    }
}


if (isset($_POST['save_student'])) {
    $bldg_code = mysqli_real_escape_string($con, $_POST['BLDG_CODE']);
    $bldg_name = mysqli_real_escape_string($con, $_POST['BLDG_NAME']);
    $bldg_location = mysqli_real_escape_string($con, $_POST['BLDG_LOCATION']);

    $query = "INSERT INTO building (BLDG_CODE,BLDG_NAME,BLDG_LOCATION) VALUES ('$bldg_code','$bldg_name','$bldg_location')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Building Created Successfully";
        header("Location: building-create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Building Not Created";
        header("Location: building-create.php");
        exit(0);
    }
}

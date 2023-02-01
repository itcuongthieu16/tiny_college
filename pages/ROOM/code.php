<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_room']))
{
    $room_id = mysqli_real_escape_string($con, $_POST['delete_room']);

    $query = "DELETE FROM room WHERE ROOM_CODE='$room_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Room Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Room Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_room']))
{
    $room_code = mysqli_real_escape_string($con, $_POST['ROOM_CODE']);
    $room_type = mysqli_real_escape_string($con, $_POST['ROOM_TYPE']);
    $bldg_code = mysqli_real_escape_string($con, $_POST['BLDG_CODE']);

    $query = "UPDATE room SET ROOM_CODE='$room_code', ROOM_TYPE='$room_type', BLDG_CODE='$bldg_code' WHERE ROOM_CODE='$room_code' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Room Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Room Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_room']))
{
    $room_code = mysqli_real_escape_string($con, $_POST['ROOM_CODE']);
    $room_type = mysqli_real_escape_string($con, $_POST['ROOM_TYPE']);
    $bldg_code = mysqli_real_escape_string($con, $_POST['BLDG_CODE']);

    $query = "INSERT INTO room (ROOM_CODE,ROOM_TYPE,BLDG_CODE) VALUES ('$room_code','$room_type','$bldg_code')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Room Created Successfully";
        header("Location: room-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Room Not Created";
        header("Location: room-create.php");
        exit(0);
    }
}

<?php

$con = mysqli_connect("localhost", "root", "", "tinycollege");

if (!$con) {
    die('Connection Failed' . mysqli_connect_error());
}

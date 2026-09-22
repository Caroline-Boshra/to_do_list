<?php

require_once '../database/dbConnection.php'; 
require_once '../core/validations.php';
require_once '../core/functionForQuery.php'; 

if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    $_SESSION['errors'] = "Method not allowed";
    header("location:../index.php");
    exit;
}

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    [$title, $is_completed] = reserveData();

    $is_valid = requiredValidations($title, "Title");

    if ($is_valid && selectForSearch($conn, $id)) {
        
        updateDate($conn, $id, $title, $is_completed);
        $_SESSION['success'] = "Data updated successfully";
        header("location:../index.php");
        exit;
        
    } else {
        $_SESSION['errors'] = "Data not found or invalid input";
        header("location:../index.php");
        exit;
    }
} else {
    $_SESSION['errors'] = "Invalid request";
    header("location:../index.php");
    exit;
}
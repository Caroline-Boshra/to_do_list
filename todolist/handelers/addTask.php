<?php

require_once '../database/dbConnection.php'; 
require_once '../core/validations.php';
require_once '../core/functionForQuery.php'; 


if ($_SERVER['REQUEST_METHOD'] !== "POST" ) {
    $_SESSION['errors']="Method not allowed";
    header("location:../index.php");
    exit;
}

[$title,$is_completed] = reserveData();

$is_valid = requiredValidations($title, "Title");

if ($is_valid) {

    $result = insertData($conn, $title, $is_completed);
    
    if($result && mysqli_affected_rows($conn) == 1){
        $_SESSION['success'] = "Data inserted successfully";
    } else {
        $_SESSION['errors'] = "Failed to insert data (Database Error)";
    }
} 

header("location:../index.php");
exit;
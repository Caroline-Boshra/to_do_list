<?php

require_once '../database/dbConnection.php'; 
require_once '../core/functionForQuery.php'; 

$id= $_GET['id'];

if(isset($_GET['id'])){
    if(selectForSearch($conn,$id)){

        deleteData($conn,$id);
        $_SESSION['success']="Data deleted successfully";
        header("location:../index.php");
    }else{
        $_SESSION['errors']="Data not found";
        header("location:../index.php");
        exit;
    }
}else{
   $_SESSION['errors']="Invalid request";
    header("location:../index.php");
    exit;
}

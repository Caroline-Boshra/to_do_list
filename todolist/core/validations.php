<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
function requiredValidations($value,$filedName){
   if (empty($value)) {
    $_SESSION['errors']="$filedName is required";
   return false;
   }
   return true;
}
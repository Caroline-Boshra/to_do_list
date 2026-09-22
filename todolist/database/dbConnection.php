<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "todoapp");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

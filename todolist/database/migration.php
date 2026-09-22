<?php


$conn =mysqli_connect("localhost","root","");
$query="CREATE database if not exists todoapp";
$result = mysqli_query($conn,$query);
mysqli_close($conn);



$conn =mysqli_connect("localhost","root","","todoapp");

$query=" CREATE TABLE IF NOT EXISTS tasks(
`id` INT PRIMARY KEY AUTO_INCREMENT ,
`title` VARCHAR(225) NOT NULL,
`is_completed` ENUM('Completed', 'Not_completed') NOT NULL,
`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
)";

$result = mysqli_query($conn,$query);
mysqli_close($conn);
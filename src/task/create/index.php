<?php 

include '../../config/settings.php'; 
include '../../include/database.php'; 

$name = 'New Task';
$description = '';

$stmt = mysqli_prepare($connection, "INSERT INTO `tm_task` (`name`, `description`) VALUE(?,?); ");

mysqli_stmt_bind_param($stmt, "ss", $name, $description);
mysqli_stmt_execute($stmt);

header('location: /tasks/');

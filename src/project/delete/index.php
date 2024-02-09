<?php 

include '../../config/settings.php'; 
include '../../include/database.php'; 

$id = $_POST['id'];

$stmt = mysqli_prepare($connection, "DELETE FROM `tm_project` WHERE id=? ");
mysqli_stmt_bind_param($stmt, "s", $id);
mysqli_stmt_execute($stmt);

header('location: /projects');
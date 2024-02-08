<?php



$connection = mysqli_connect(
    MYSQL_HOST.':'.MYSQL_PORT, 
    MYSQL_USERNAME, 
    MYSQL_PASSWORD,
    MYSQL_DATABASE
);
if (!$connection) {
     die('Could not connect: ' . mysql_error());
}

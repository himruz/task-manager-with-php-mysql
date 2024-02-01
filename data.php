<?php
include_once "config.php";

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if (!$connection) {
    throw new Exception("cannot connect Database");
}else{
    echo "Database Connected";
    mysqli_query($connection, "INSERT INTO tasks (task, date) VALUES('Homeworke 2', '2024-01-31') ");
    mysql_close($connection);
}
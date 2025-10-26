<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "pbs-apparel";

$connection = new mysqli($servername, $username, $password, $database);

if($connection->connect_error){
    die("Connection Error: " . $connection->connect_error);
}
?>
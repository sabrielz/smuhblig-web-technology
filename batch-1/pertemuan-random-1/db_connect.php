<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "ekstra_pemrograman";

$connect = mysqli_connect($hostname, $username, $password, $database);

if (!$connect) {
    echo "Failed to connect database!";
}

echo "Database connected.";
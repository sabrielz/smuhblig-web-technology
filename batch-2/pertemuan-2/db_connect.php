<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "pemrograman";

$connect = mysqli_connect($hostname, $username, $password, $database);

if ($connect) {
    echo "Koneksi ke database berhasil.";
}
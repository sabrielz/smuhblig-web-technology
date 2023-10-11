<?php

include_once "db_connect.php";

// $username = $_POST['username'];
// $password = $_POST['password'];

$users = mysqli_query($connect, "SELECT * FROM user");
$users = mysqli_fetch_assoc($users);
/**
 * $users = "Yunanto"
 * $users = [
 *     "id" => ...,
 *     "username" => ...,
 *     "password" => ...
 * ]
 */

echo $users['username'];
echo $users['password'];
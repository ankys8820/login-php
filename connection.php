<?php
$host = "localhost";
$user_db = "root";
$pass_db = '';
$db_name = 'login-app';

$conn = mysqli_connect($host, $user_db, $pass_db, $db_name);

if (!$conn) {
    echo ("Database not connected");
}

<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "cpp_project";

$conn = new mysqli($server_name, $user_name, $password, $db_name);

if (!$conn) {
    echo "Database Connection Failed";
    // echo "Database Connection Failed" . mysqli_connect_error();
}
?>
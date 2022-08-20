<?php
$hostname = "localhost";
$username = "root";
$pass = "";
$dbname = "harshphp_project";


$conn = mysqli_connect($hostname, $username, $pass, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

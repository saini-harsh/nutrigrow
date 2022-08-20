<?php
include('../include/config.php');
$id = $_GET['id'];
$sql = "DELETE FROM `signup_data` WHERE email = '$id'";
if (mysqli_query($conn, $sql)) {
    header('location:user.php');
} else {
    echo 'failed';
}

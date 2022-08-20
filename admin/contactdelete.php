<?php
include('../include/config.php');
$id = $_GET['id'];
$sql = "DELETE FROM `contact_now_data` WHERE email = '$id'";
if (mysqli_query($conn, $sql)) {
    header('location:contact.php');
} else {
    echo 'failed';
}

<?php
include('../include/config.php');
$id = $_GET['id'];
$sql = "DELETE FROM `newsletter_data` WHERE email = '$id'";
if (mysqli_query($conn, $sql)) {
    header('location:newsletter.php');
} else {
    echo 'failed';
}

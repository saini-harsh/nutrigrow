<?php
include('../include/config.php');
$id = $_GET['id'];
$sql = "DELETE FROM `testimonials` WHERE id = '$id'";
if (mysqli_query($conn, $sql)) {
    header('location:testimonials.php');
} else {
    echo 'failed';
}

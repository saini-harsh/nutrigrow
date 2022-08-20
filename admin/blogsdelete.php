<?php
include('../include/config.php');
$id = $_GET['id'];
$sql = "DELETE FROM `blogs` WHERE id = '$id'";
if (mysqli_query($conn, $sql)) {
    header('location:blogs.php');
} else {
    echo 'failed';
}

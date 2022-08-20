<?php
include('../include/config.php');
$id = $_GET['id'];
$sql = "DELETE FROM `news` WHERE id = '$id'";
if (mysqli_query($conn, $sql)) {
    header('location:news.php');
} else {
    echo 'failed';
}

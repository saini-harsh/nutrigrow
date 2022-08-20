<?php
include('../include/config.php');
$id = $_GET['id'];
$sql = "DELETE FROM `products` WHERE id = '$id'";
if (mysqli_query($conn, $sql)) {
    header('location:products.php');
} else {
    echo 'failed';
}

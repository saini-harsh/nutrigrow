<?php
include('../include/config.php');
$id = $_GET['id'];
$sql = "DELETE FROM `get_touch_data` WHERE email = '$id'";
if (mysqli_query($conn, $sql)) {
    header('location:getintouch.php');
} else {
    echo 'failed';
}

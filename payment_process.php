<?php
session_start();
include('./include/config.php');
if (isset($_POST['payment_id']) && isset($_POST['amt'])) {

    $fname = $_SESSION['signupfname'];
    $sql = "SELECT * FROM signup_data WHERE fname = '$fname'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
        }
    }
    $payment_id = $_POST['payment_id'];
    $amt = $_POST['amt'];
    $payment_status = "Complete";
    $added_on = date('Y-m-d h:i:s');

    $sql_insert = "INSERT INTO `payment`(`name`, `amount`, `payment_status`, `payment_id`, `added_on`) VALUES ('$fname','$amt','$payment_status','$payment_id','$added_on')";

    if (mysqli_query($conn, $sql_insert)) {
        // $succ = "payment complete";
    } else {
        echo "regestration failed";
    }
}

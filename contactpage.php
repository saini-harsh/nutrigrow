<?php
include('./include/config.php');
$name = $_POST['name'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pphone = $_POST['pphone'];
$ophone = $_POST['ophone'];
$message = $_POST['msg'];

$sql_insert = "INSERT INTO `contact_now_data`(`name`, `lname`, `email`, `pphone`, `ophone`, `msg`) VALUES ('$name','$lname','$email','$pphone','$ophone','$message')";

if (mysqli_query($conn, $sql_insert)) {
    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pphone = $_POST['pphone'];
    $ophone = $_POST['ophone'];
    $message = $_POST['msg'];

    $to = "harshsainipc859@gmail.com";

    $subject = "Mail for Nutrigrow Oil";
    $dgdata = "
                            First Name = " . $name . "\r\n 
                            Last Name = " . $lname . "\r\n 
                            Email Address= " . $email . "\r\n 
                            Phone Number = " . $pphone . "\r\n 
                            Order Number = " . $ophone . "\r\n 
                            Describe our issue = " . $message . "\r\n
                            ";

    $headers = "From: noreply@harshgroup.com" . "\r\n" . "CC: somebodyelse@example.com";
    if ($name != NULL || $lname != NULL || $email != NULL || $pphone != NULL || $ophone != NULL || $message != NULL) {
        mail($to, $subject, $dgdata, $headers);
    }

    echo "Submit Succesfully";
} else {
    echo "regestration failed";
}

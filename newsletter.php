<?php
include('./include/auth.php');
include('./include/config.php');
$nemail = $_POST['nemail'];

$sql_insert = "INSERT INTO `newsletter_data`(`email`) VALUES ('$nemail')";

if (mysqli_query($conn, $sql_insert)) {
    $nemail = $_POST['nemail'];

    $to = "harshsainipc859@gmail.com";

    $subject = "Mail for powergroup Group";
    $dgdata = "
                        Email = " . $nemail . "\r\n ";

    $headers = "From: noreply@powergroup.com" . "\r\n" . "CC: somebodyelse@example.com";
    if ($nemail != NULL) {
        mail($to, $subject, $dgdata, $headers);
    }
    echo "Submit Succesfully";
} else {
    echo "regestration failed";
}

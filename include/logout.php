<?php
session_start();
if (isset($_SESSION['signinemail'])) {
    session_destroy();
    echo "asdfasdf";
    header('location:../signin.php');
}

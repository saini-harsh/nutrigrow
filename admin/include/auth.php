<?php
session_start();
if (!isset($_SESSION['adminsigninemail'])) {
?>
    <script>
        window.location.href = "signin.php";
    </script>
<?php
    // header('location:/signin.php');
    echo "hello";
}

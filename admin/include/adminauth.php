<?php
session_start();
if (!isset($_SESSION['email'])) {
?>
    <script>
        window.location.href = "signin.php";
    </script>
<?php
    echo "hello";
}

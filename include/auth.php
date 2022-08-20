<?php
session_start();
if (!isset($_SESSION['signinemail'])) {
?>
    <script>
        window.location.href = "signin.php";
    </script>
<?php
}

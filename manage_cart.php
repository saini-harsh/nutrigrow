<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Add_To_Cart'])) {
        if (isset($_SESSION['harsh'])) {
            $myproducts = array_column($_SESSION['harsh'], 'type');
            if (in_array($_POST['type'], $myproducts)) {
?>
                <script>
                    alert('Product Already Added.');
                    window.location.href = 'products.php';
                </script>
            <?php
            } else {
                $count = count($_SESSION['harsh']);
                $_SESSION['harsh'][$count] = array('file_path' => $_POST['file_path'], 'type' => $_POST['type'], 'price' => $_POST['price'], 'description' => $_POST['description'], 'size' => $_POST['size'], 'category' => $_POST['category'], 'quantity' => $_POST['quantity']);
            ?>
                <script>
                    // alert('Product Added with else.');
                    window.location.href = 'cart.php';
                </script>
            <?php
            }
        } else {
            $_SESSION['harsh'][$count] = array('file_path' => $_POST['file_path'], 'type' => $_POST['type'], 'price' => $_POST['price'], 'description' => $_POST['description'], 'Size' => $_POST['size'], 'Category' => $_POST['category'], 'Quantity' => $_POST['quantity']);
            ?>
            <script>
                // alert('Product Added external else.');
                window.location.href = 'products.php';
            </script>
            <?php
        }
    }
    if (isset($_POST['remove_product'])) {
        foreach ($_SESSION['harsh'] as $key => $value) {
            if ($value['type'] == $_POST['type']) {
                unset($_SESSION['harsh'][$key]);
                $_SESSION['harsh'] = array_values($_SESSION['harsh']);
            ?>
                <script>
                    window.location.href = 'cart.php';
                </script>
<?php
            }
        }
    }
}

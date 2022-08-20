<?php
// include('./include/auth.php');
include('./include/adminauth.php');
include('../include/config.php');
include('./include/adheader.php');
?>
<div class="container-fluid ">
    <div class="row ">
        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4 col-12">
            <?php
            include('./include/sidebar.php');
            ?>
        </div>
        <div class="col-xxl-10 col-xl-10 col-lg-9 col-md-9 col-sm-8 col-12  mt-3">
            <div class="row">
                <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm- 3 col-6a">
                    <div class="breadcrumb">
                        <ul>
                            <li>Home</li> &dash;
                            <li>Products</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="profile greybg">
                <div class="">
                    <div class="cbox">
                        <!-- upload -->
                        <?php

                        $target_dir = "uploads/products/";
                        if (isset($_POST['submit'])) {
                            $target_file = $target_dir . basename($_FILES['fileToUpload']["name"]);
                            $file_name =  basename($_FILES['fileToUpload']["name"]);
                            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                            $check = getimagesize($_FILES['fileToUpload']['tmp_name']);

                            if ($check) {

                                move_uploaded_file(
                                    // echo "File is an Image Upload Succesfully - " . $check['mime'] . ".";
                                    $_FILES["fileToUpload"]["tmp_name"],
                                    $target_file
                                );
                                //update query
                                $type = $_POST['type'];
                                $price = $_POST['price'];
                                $description = $_POST['description'];


                                $sql_insert = "INSERT INTO `products`(`file_path`, `type`, `price`, `description`) VALUES ('$file_name','$type','$price','$description')";

                                if (mysqli_query($conn, $sql_insert)) {
                                    $success = "Added successfully";
                        ?>
                                    <script>
                                        window.location.href = "products.php";
                                    </script>
                        <?php
                                } else {
                                    echo "Add Product Failed";
                                }
                            }
                        }
                        ?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="modal-header ">
                                <h5 class="modal-title" id="exampleModelLabel">Add Product</h5>
                            </div>
                            <div class="modal-body">

                                <div class="row g-3">
                                    <div class="col">
                                        <label for="fileToUpload">Oil File</label>
                                        <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" required>
                                    </div>
                                    <div class="col">
                                        <label for="type">Type</label>
                                        <input type="text" name="type" id="type" required>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col">
                                        <label for="price">Price</label>
                                        <input type="number" name="price" id="price" required>
                                    </div>
                                    <div class="col">
                                        <label for="description">Description</label> <br>
                                        <!-- <input type="text" name="description" id="description"> -->
                                        <textarea name="description" id="description" class="w-100" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Add Now</button>
                                <div style="color: green; text-transform: uppercase;">
                                    <?php
                                    echo "<br>";
                                    if (isset($_POST['submit'])) {
                                        echo $success;
                                    }
                                    ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
include('./include/adfooter.php');
?>
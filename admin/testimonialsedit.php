<?php
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
                            <li>testimonials</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="profile greybg">
                <div class="">
                    <div class="cbox">
                        <form action="" method="post">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModelLabel">Edit Data</h5>
                            </div>
                            <div class="modal-body">
                                <?php
                                $id = $_GET['id'];
                                $sql = "SELECT  `review`, `reviewer`, `datetime` FROM `testimonials` WHERE id = '$id'";

                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>

                                        <div class="row g-3">
                                            <div class="col-12">
                                                <textarea name="review" class="w-100"><?php echo $row['review'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-lg-6 col-md-12">
                                                <input type="text" class="form-control" name="reviewer" value="<?php echo $row['reviewer'] ?>">
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <input type="datetime" class="form-control" name="datetime" value="<?php echo $row['datetime'] ?>">
                                            </div>
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="edit-btn" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['edit-btn'])) {
                            $review = $_POST['review'];
                            $reviewer = $_POST['reviewer'];
                            $datetime = $_POST['datetime'];

                            $update_data = "UPDATE testimonials SET testimonials.review='$review', products.reviewer='$reviewer',testimonials.datetime='$datetime' WHERE testimonials.id='$id' ";


                            $result = mysqli_query($conn, $update_data);
                            if ($result) {
                        ?>
                                <script>
                                    window.location.href = "testimonials.php";
                                </script>
                        <?php
                            } else {
                                echo "Update Failed";
                            }
                        }
                        ?>

                        <?php
                        if (isset($_POST['edit-btn'])) {
                            //update query
                            $review = $_POST['review'];
                            $reviewer = $_POST['reviewer'];
                            $datetime = $_POST['datetime'];

                            $update_data = "UPDATE testimonials SET testimonials.review='$review', testimonials.reviewer='$reviewer',testimonials.datetime='$datetime' WHERE testimonials.id='$id' ";

                            if (mysqli_query($conn, $update_data)) {
                                $success = "Added successfully";
                        ?>
                                <script>
                                    window.location.href = "testimonials.php";
                                </script>
                        <?php
                            } else {
                                echo "Add Testimonials Failed";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
include('./include/adfooter.php');
?>
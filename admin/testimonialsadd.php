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
                            <li>Testimonials</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="profile greybg">
                <div class="">
                    <div class="cbox">
                        <!-- upload -->
                        <?php
                        if (isset($_POST['submit'])) {
                            $review = $_POST['review'];
                            $reviewer = $_POST['reviewer'];


                            $sql_insert = "INSERT INTO `testimonials`(`review`, `reviewer`) VALUES ('$review','$reviewer')";

                            if (mysqli_query($conn, $sql_insert)) {
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
                        <form action="" method="post">
                            <div class="modal-header ">
                                <h5 class="modal-title" id="exampleModelLabel">Add Testimonials</h5>
                            </div>
                            <div class="modal-body">

                                <div class="row g-3">
                                    <div class="col">
                                        <label for="review">Review</label>
                                        <textarea name="review" class="w-100" required></textarea>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col">
                                        <label for="reviewer">Reviewer</label>
                                        <input type="text" name="reviewer" id="reviewer" required>
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
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
                            <li>Newsletter</li>
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
                                $sql = "SELECT `email` FROM `newsletter_data` WHERE id = '$id'";

                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>

                                        <div class="row g-3">
                                            <div class="col">
                                                <input type="email" class="form-control" placeholder="Student Email" aria-label="email" name="email" value="<?php echo $row['email'] ?>">
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
                            $email = $_POST['email'];

                            $update_data = "UPDATE newsletter_data SET newsletter_data.email='$email' WHERE newsletter_data.id='$id' ";


                            $result = mysqli_query($conn, $update_data);
                            if ($result) {
                                // echo "success";
                                // header('location:adminnewsletter.php');
                        ?>
                                <script>
                                    window.location.href = "newsletter.php";
                                </script>
                        <?php
                            } else {
                                echo "Update Failed";
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
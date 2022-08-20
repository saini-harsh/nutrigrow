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
                            <li>get in touch</li>
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
                                $sql = "SELECT `name`, `email`, `phone`, `message`, `datetime` FROM `get_touch_data` WHERE id = '$id'";

                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>

                                        <div class="row g-3">
                                            <div class="col-lg-6 col-md-12">
                                                <input type="text" class="form-control" placeholder="Student Name" aria-label="First name" name="name" value="<?php echo $row['name'] ?>">
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <input type="email" class="form-control" placeholder="Student Email" aria-label="email" name="email" value="<?php echo $row['email'] ?>">
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-lg-6 col-md-12">
                                                <input type="tel" class="form-control" maxlength="10" placeholder="Student Phone" aria-label="last name" name="phone" value="<?php echo $row['phone'] ?>">
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <input type="datetime" name="datetime" id="datetime" value="<?php echo $row['datetime'] ?>">
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <textarea name="message" id="message" placeholder="Message"><?php echo $row['message'] ?></textarea>
                                            </div>
                                        </div>

                                <?php
                                    }
                                }
                                ?>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="editgt-btn" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['editgt-btn'])) {
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $phone = $_POST['phone'];
                            $datetime = $_POST['datetime'];
                            $message = $_POST['message'];

                            $update_data = "UPDATE get_touch_data SET get_touch_data.name='$name',get_touch_data.email='$email', get_touch_data.email='$email',get_touch_data.phone='$phone',get_touch_data.datetime='$datetime',get_touch_data.message='$message' WHERE get_touch_data.id='$id' ";


                            $result = mysqli_query($conn, $update_data);
                            if ($result) {
                                // // echo "success";
                                // header('location:adminuser.php');
                        ?>
                                <script>
                                    window.location.href = "getintouch.php";
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
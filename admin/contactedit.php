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
                            <li>Contact</li>
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
                                $sql = "SELECT `name`, `lname`, `email`, `pphone`, `ophone`, `msg`, `datetime` FROM `contact_now_data` WHERE id = '$id'";

                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>

                                        <div class="row g-3">
                                            <div class="col-lg-6 col-md-12">
                                                <input type="text" class="form-control" placeholder="Student Name" aria-label="First name" name="name" value="<?php echo $row['name'] ?>">
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <input type="text" class="form-control" placeholder="Student Name" aria-label="Last name" name="lname" value="<?php echo $row['lname'] ?>">
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-lg-6 col-md-12">
                                                <input type="email" class="form-control" placeholder="Student Email" aria-label="email" name="email" value="<?php echo $row['email'] ?>">
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <input type="tel" class="form-control" placeholder="Student Phone" aria-label="last name" name="pphone" maxlength="10" value="<?php echo $row['pphone'] ?>">
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-lg-6 col-md-12">
                                                <input type="tel" class="form-control" placeholder="Student Phone" aria-label="last name" name="ophone" maxlength="10" value="<?php echo $row['ophone'] ?>">
                                            </div>
                                            <div class="col">
                                                <input type="datetime" name="datetime" id="datetime" value="<?php echo $row['datetime'] ?>">
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-lg-6 col-md-12">
                                                <textarea name="msg" class="w-100" id="msg" placeholder="Message"><?php echo $row['msg'] ?></textarea>
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
                            $name = $_POST['name'];
                            $lname = $_POST['lname'];
                            $email = $_POST['email'];
                            $pphone = $_POST['pphone'];
                            $ophone = $_POST['ophone'];
                            $msg = $_POST['msg'];
                            $datetime = $_POST['datetime'];

                            $update_data = "UPDATE contact_now_data SET contact_now_data.name='$name',contact_now_data.lname='$lname',contact_now_data.email='$email',contact_now_data.pphone='$pphone',contact_now_data.ophone='$ophone',contact_now_data.msg='$msg',contact_now_data.datetime='$datetime' WHERE contact_now_data.id='$id' ";


                            $result = mysqli_query($conn, $update_data);
                            if ($result) {
                                // // echo "success";
                                // header('location:adminuser.php');
                        ?>
                                <script>
                                    window.location.href = "contact.php";
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
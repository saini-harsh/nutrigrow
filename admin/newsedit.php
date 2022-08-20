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
                            <li>News</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="profile greybg">
                <div class="">
                    <div class="cbox">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModelLabel">Edit Data</h5>
                            </div>
                            <div class="modal-body">
                                <?php
                                $id = $_GET['id'];  
                                $sql = "SELECT `file_path`, `date`, `type`, `description`, `time` FROM `news` WHERE id = '$id'";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>

                                        <div class="row g-3">
                                            <div class="col-lg-6 col-md-12">
                                                <input type="file" class="form-control" aria-label="First name" name="fileToUpload" value="<?php echo $row['file_path'] ?>">
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <input type="date" class="form-control" name="date" value="<?php echo $row['date'] ?>">
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-lg-6 col-md-12">
                                                <input type="text" class="form-control" name="type" value="<?php echo $row['type'] ?>">
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <input type="datetime" class="form-control" name="time" value="<?php echo $row['time'] ?>">
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <textarea name="description" class="w-100"><?php echo $row['description'] ?></textarea>
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
                            $file_path = $_POST['file_path'];
                            $date = $_POST['date'];
                            $type = $_POST['type'];
                            $description = $_POST['description'];
                            $time = $_POST['time'];

                            $update_data = "UPDATE news SET news.file_path='$file_path',news.date='$date', news.type='$type',news.description='$description',news.time='$time' WHERE news.id='$id' ";


                            $result = mysqli_query($conn, $update_data);
                            if ($result) {
                                // header('location:adminuser.php');
                        ?>
                                <script>
                                    window.location.href = "news.php";
                                </script>
                        <?php
                            } else {
                                echo "Update Failed";
                            }
                        }
                        ?>

                        <?php

                        $target_dir = "uploads/news/";
                        if (isset($_POST['edit-btn'])) {
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
                                $date = $_POST['date'];
                                $type = $_POST['type'];
                                $description = $_POST['description'];
                                $time = $_POST['time'];

                                $update_data = "UPDATE news SET news.file_path='$file_name',news.date='$date', news.type='$type',news.description='$description',news.time='$time' WHERE news.id='$id' ";

                                if (mysqli_query($conn, $update_data)) {
                                    $success = "Added successfully";
                        ?>
                                    <script>
                                        window.location.href = "news.php";
                                    </script>
                        <?php
                                } else {
                                    echo "Add News Failed";
                                }
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
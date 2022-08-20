<?php
include('./include/config.php');
include('./include/header.php');
?>
<!-- banner end -->

<section class="coontainer-fluid latest" style="overflow-x: hidden !important;">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>blog</h2>
                <div class="hbline"></div>
                <div class="row py-4 d-flex align-items-center">
                    <?php
                    $id = $_GET['id'];
                    $sql = "SELECT `user_img`, `date`, `type`, `description` FROM `blogs` WHERE id = '$id'";

                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div data-aos="fade-right" data-aos-duration="4000">
                                    <img src="<?php
                                                if (isset($row['user_img']))
                                                    echo "admin/uploads/blogs/" . $row['user_img'];
                                                ?>" class="w-100" alt="" srcset="">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div data-aos="fade-left" data-aos-duration="3000">
                                    <div class="box">
                                        <div class="content etccont">
                                            <div class="date"><?php echo $row['date'] ?></div>
                                            <h6><?php echo $row['type'] ?></h6>
                                            <p><?php echo $row['description'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
        <?php
                        }
                    }
        ?>
            </div>
        </div>
</section>

<!-- footer -->
<?php
include('./include/footer.php')
?>
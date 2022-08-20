<?php
include('./include/config.php');
include('./include/header.php');
?>

<section class="container-fluid newsblog mb-5" style="overflow-x: hidden !important;">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col">
                <h2>
                    NEWS
                </h2>
                <div class="hbline"></div>
                <div class="row d-flex align-items-center py-4">
                    <?php
                    $id = $_GET['id'];
                    $sql = "SELECT `file_path`, `date`, `type`, `description` FROM `news` WHERE id = '$id'";

                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div data-aos="fade-right" data-aos-duration="3000">
                                    <img src="<?php
                                                if (isset($row['file_path']))
                                                    echo "admin/uploads/news/" . $row['file_path'];
                                                ?>" class="w-100" alt="" srcset="">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div data-aos="fade-left" data-aos-duration="3000">
                                    <div class="content contentetc">
                                        <div class="date"><?php echo $row['date'] ?></div>
                                        <h6><?php echo $row['type'] ?></h6>
                                        <p><?php echo $row['description'] ?></p>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('./include/testimonials.php');
include('./include/socialmedialinks.php');
?>

<!-- banner end -->

<!-- footer -->
<?php
include('./include/footer.php')
?>
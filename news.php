<?php
// session_start();
include('./include/config.php');
include('./include/header.php');
?>


<section class="container-fluid news">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <h2>NEWS & RESOURCES</h2>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid newsblog mb-5">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col">
                <h2>
                    LATEST NEWS & RESOURCES
                </h2>
                <div class="hbline"></div>
                <div class="row d-flex align-items-center">
                    <?php
                    $count = 0;
                    $sql = "SELECT * FROM `news`";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $count++;
                    ?>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="nbox">
                                    <div data-aos="zoom-in-up" data-aos-duration="3000">
                                        <img class="w-100" src="<?php
                                                                if (isset($row['file_path']))
                                                                    echo "admin/uploads/news/" . $row['file_path'];
                                                                ?>" alt="">

                                        <div class="content">
                                            <div class="date"><?php echo $row['date'] ?></div>
                                            <h6><?php echo $row['type'] ?></h6>
                                            <p><?php echo $row['description'] ?></p>
                                            <a href="newss.php?id=<?php echo $row['id'] ?>"><button>
                                                    read more
                                                    <i class="fa-solid fa-angle-right"></i></button></a>
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
        </div>
    </div>
</section>

<?php
include('./include/socialmedialinks.php');
?>

<!-- banner end -->

<!-- footer -->
<?php
include('./include/footer.php')
?>
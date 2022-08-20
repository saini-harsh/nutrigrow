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
                            <li>Progress</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="profile greybg">
                <div class="">
                    <div class="progressbox">
                        <div class="row">
                            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                                <div class="pbox">
                                    <?php
                                    $pcount = 0;
                                    $sql = "SELECT * FROM `products`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $pcount++;
                                        }
                                    }
                                    ?>
                                    <h4>
                                        <?php
                                        echo $pcount;   
                                        ?>
                                    </h4>
                                    <h5>prodcuts</h5>
                                    <p> <?php
                                        echo $pcount;
                                        ?> Products available. </p>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                                <div class="pbox">
                                    <?php
                                    $bcount = 0;
                                    $sql = "SELECT * FROM `blogs`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $bcount++;
                                        }
                                    }
                                    ?>
                                    <h4><?php
                                        echo $bcount;
                                        ?></h4>
                                    <h5>Blogs</h5>
                                    <p> <?php
                                        echo $bcount;
                                        ?> blogs available. </p>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                                <div class="pbox">
                                    <?php
                                    $ucount = 0;
                                    $sql = "SELECT * FROM `signup_data`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $ucount++;
                                        }
                                    }
                                    ?>
                                    <h4><?php
                                        echo $ucount;
                                        ?></h4>
                                    <h5>Users</h5>
                                    <p> <?php
                                        echo $ucount;
                                        ?> users registered. </p>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                                <div class="pbox">
                                    <?php
                                    $ncount = 0;
                                    $sql = "SELECT * FROM `news`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $ncount++;
                                        }
                                    }
                                    ?>
                                    <h4><?php
                                        echo $ncount;
                                        ?></h4>
                                    <h5>News</h5>
                                    <p> <?php
                                        echo $ncount;
                                        ?> news available. </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="pbox">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="pbox">
                                    <canvas id="lineChart"></canvas>
                                </div>
                            </div>
                            <!-- <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-4">
                                <div class="pbox">
                                    <canvas id="doughnutChart"></canvas>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
include('./include/adfooter.php');
?>
<section class="coontainer-fluid latest">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>latest blogs</h2>
                <div class="hbline"></div>
                <div class="row">
                    <div class="owl-carousel owl-theme" id="test">
                        <?php
                        $count = 0;
                        $sql = "SELECT * FROM `blogs`";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $count++;
                        ?>
                                <div class="item">

                                    <div class="box">
                                        <img class="w-100" src="<?php
                                                                if (isset($row['user_img']))
                                                                    echo "admin/uploads/blogs/" . $row['user_img'];
                                                                ?>" alt="">

                                        <div class="content" style="display: block;">
                                            <div class="date"><?php echo $row['date'] ?></div>
                                            <h6><?php echo $row['type'] ?></h6>
                                            <p><?php echo $row['description'] ?></p>
                                            <a href="blog.php?id=<?php echo $row['id'] ?>"><button>
                                                    read more
                                                    <i class="fa-solid fa-angle-right"></i></button></a>
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
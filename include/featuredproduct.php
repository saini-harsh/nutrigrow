<section class="container-fluid featured">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>featured product</h2>
                <div class="hbline"></div>
                <div class="row">
                    <div class="owl-carousel owl-theme">
                        <?php
                        $count = 0;
                        $sql = "SELECT * FROM `products`";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $count++;
                        ?>
                                <div class="item">
                                    <div class="product">
                                        <img src="<?php
                                                    if (isset($row['file_path']))
                                                        echo "admin/uploads/products/" . $row['file_path'];
                                                    ?>" class="img-fluid" alt="" srcset="" />
                                        <h5 style="text-transform: uppercase;"><?php echo $row['type'] ?></h5>
                                        <p>$<?php echo $row['price'] ?></p>
                                        <a href="product.php?id=<?php echo $row['id'] ?>"><button>
                                                shop now <i class="fa-solid fa-angle-right"></i></button></a>
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
    </div>
</section>
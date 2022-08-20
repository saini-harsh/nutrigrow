<?php
// include('./include/auth.php');
include('./include/config.php');
include('./include/header.php');
?>

<section class="container-fluid singleproduct">
    <div class="container">
        <!-- <?php echo print_r($_SESSION['harsh']) ?> -->
        <form action="manage_cart.php" method="POST">
            <?php
            $id = $_GET['id'];
            $sql = "SELECT `file_path`, `type`, `price`, `description` FROM `products` WHERE id = '$id'";

            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="row">
                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                            <div class="imgbox">
                                <input type="hidden" name="file_path" value="<?php echo $row['file_path'] ?>">
                                <img src="<?php
                                            if (isset($row['file_path']))
                                                echo "admin/uploads/products/" . $row['file_path'];
                                            ?>" class="img-fluid" alt="" srcset="" />
                            </div>
                            <div class="row">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                                    <div class="simgbox">
                                        <img src="<?php
                                                    if (isset($row['file_path']))
                                                        echo "admin/uploads/products/" . $row['file_path'];
                                                    ?>" alt="" class="img-fluid" srcset="" />
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                                    <div class="simgbox">
                                        <img src="<?php
                                                    if (isset($row['file_path']))
                                                        echo "admin/uploads/products/" . $row['file_path'];
                                                    ?>" alt="" class="img-fluid" srcset="" />
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                                    <div class="simgbox">
                                        <img src="<?php
                                                    if (isset($row['file_path']))
                                                        echo "admin/uploads/products/" . $row['file_path'];
                                                    ?>" alt="" class="img-fluid" srcset="" />
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                                    <div class="simgbox">
                                        <img src="<?php
                                                    if (isset($row['file_path']))
                                                        echo "admin/uploads/products/" . $row['file_path'];
                                                    ?>" alt="" class="img-fluid" srcset="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                            <input type="hidden" name="type" value="<?php echo $row['type'] ?>">
                            <h2><?php echo $row['type'] ?></h2>
                            <div class="hbline"></div>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>(120 costumers reviews)</span>
                            </div>
                            <input type="hidden" name="price" value="<?php echo $row['price'] ?>">
                            <h3 id="multiplyprice"> <?php echo $row['price'] ?></h3>
                            <input type="hidden" name="description" value="<?php echo $row['description'] ?>">
                            <p><?php echo $row['description'] ?></p>
                            <label for="size">Select Size:</label>
                            <input type="hidden" name="size" value="">
                            <select name="size" id="size">
                                <option value="5ml">5 ml</option>
                                <option value="10ml">10 ml</option>
                                <option value="15ml">15 ml</option>
                                <option value="20ml">20 ml</option>
                            </select>
                            <br />
                            <label for="category">Category:</label>
                            <input type="hidden" name="category" value="">
                            <select name="category" id="category">
                                <option value="Cbd oil">Cbd oil</option>
                                <option value="Cbd flower">cbd flower</option>
                                <option value="Cbd topical">cbd topical</option>
                            </select>
                            <br />
                            <label for="quantity">Quantity:</label>
                            <input type="hidden" name="quantity" value="">
                            <select name="quantity" id="quantity">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <br />
                            <button type="submit" name="Add_To_Cart">Add To Cart <i class="fa-solid fa-angle-right"></i></button>
                            <p class="size2"></p>

                        </div>

                    </div>
            <?php
                }
            }
            ?>
        </form>
    </div>
</section>

<!-- footer -->
<?php
include('./include/footer.php')
?>
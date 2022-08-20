<?php
include('./include/auth.php');
include('./include/config.php');
include('./include/header.php');
?>

<section class="container-fluid singleproduct">
    <div class="container">
        <?php

        ?>
        <div class="row">
            <div class="col-12 ">

                <!-- start -->
                <div class="shopping-cart">
                    <!-- Title -->
                    <div class="title">
                        Shopping Bag
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Products</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Size</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Review</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
                                $hundred = 100;
                                $total = 0;
                                $counter = 0;
                                if (isset($_SESSION['harsh'])) {
                                    foreach ($_SESSION['harsh'] as $key => $value) {
                                        $total = $total + $value['price'];
                                        $counter++;
                                ?>
                                        <tr>

                                            <td><?php echo $counter ?></td>
                                            <td><img src="<?php
                                                            if (isset($value['file_path']))
                                                                echo "admin/uploads/products/" . $value['file_path'];
                                                            ?>" class="img-fluid" style="width: 150px;" alt="" srcset="" /></td>
                                            <td><?php echo $value["type"] ?></td>
                                            <td><?php echo $value["price"] ?></td>
                                            <td><?php echo $value["description"] ?></td>
                                            <td><?php echo $value["size"] ?></td>
                                            <td><?php echo $value["category"] ?></td>
                                            <td><?php echo $value["quantity"] ?></td>

                                            <td>
                                                <div class='item'>
                                                    <div class='buttons'>
                                                        <span class='like-btn'></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <form action='manage_cart.php' method='POST'>
                                                    <button name='remove_product' class='btn btn-danger'>remove</button>
                                                    <input type='hidden' name='type' value='<?php echo $value["type"] ?>'>
                                                </form>
                                            </td>


                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- end -->
            </div>
            <div class="col-12 ">
                <div class="shopping-cart2">
                    <div class="title px-xxl-3">
                        <?php
                        $fname = $_SESSION['signupfname'];
                        $sql = "SELECT * FROM signup_data WHERE fname = '$fname'";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            if ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                Proced To Check Out <?php echo $row['fname']; ?> !
                        <?php
                            }
                        }
                        ?>

                        <h3> Total $<?php echo $total; ?></h3>
                        <button type="submit" name="psubmit" onclick="pay_now()">Buy now</button>
                        <p id="hs" style="color: green;font-size: 16px;text-transform: uppercase;margin-top: 10px;"></p>
                        <!-- razorpay payment gateway -->
                        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                        <script>
                            function pay_now() {
                                var options = {
                                    "key": "rzp_test_SbSjI6yahcrxjU",
                                    "amount": "<?php echo $total * $hundred; ?>",
                                    "currency": "INR",
                                    "name": "THe Powergroup",
                                    "description": "Test Transaction",
                                    "image": "./assests/images/logo.png",
                                    // "order_id": "order_Ef80WJDPBmAeNt", //Pass the `id` obtained in the previous step    
                                    // "account_id": "acc_Ef7ArAsdU5t0XL",
                                    "handler": function(response) {
                                        $.ajax({
                                            type: 'post',
                                            url: 'payment_process.php',
                                            data: "payment_id=" + response.razorpay_payment_id + "&amt=" + <?php echo $total; ?>,
                                            success: function(result) {
                                                // window.location.href = "products.php";
                                                document.getElementById('hs').innerHTML = "payment successful";
                                            }
                                        });

                                    }
                                };
                                var rzp1 = new Razorpay(options);
                                rzp1.open();
                            }
                        </script>
                        <!-- razorpay payment gateway -->
                    </div>
                </div>
            </div>
        </div>
        <?php

        ?>
    </div>
</section>

<!-- footer -->
<?php
include('./include/footer.php')
?>
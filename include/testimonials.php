<section class="container-fluid testimonials">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Testimonials & Reviews</h2>
                <div class="hbline"></div>
                <div class="row mt-5">
                    <div class="owl-carousel owl-theme" id="test">
                        <?php
                        $count = 0;
                        $sql = "SELECT * FROM `testimonials`";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $count++;
                        ?>
                                <?php
                                if ($count === 1) {
                                ?>
                                    <div class="item">
                                        <div class="circle">

                                            <div class="gcircle">
                                                <img src="./assests/images/comma.png" class="img-fluid" style="width: 90px; margin: 0 auto;" srcset="" />
                                                <p><?php echo $row['review'] ?></p>
                                                <h6><?php echo $row['reviewer'] ?></h6>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                                <?php
                                if ($count === 2) {
                                ?>
                                    <div class="item">
                                        <div class="circle">

                                            <div class="rcircle">
                                                <img src="./assests/images/comma.png" class="img-fluid" style="width: 90px; margin: 0 auto;" srcset="" />
                                                <p><?php echo $row['review'] ?></p>
                                                <h6><?php echo $row['reviewer'] ?></h6>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                                <?php
                                if ($count === 3) {
                                ?>
                                    <div class="item">
                                        <div class="circle">

                                            <div class="gcircle">
                                                <img src="./assests/images/comma.png" class="img-fluid" style="width: 90px; margin: 0 auto;" srcset="" />
                                                <p><?php echo $row['review'] ?></p>
                                                <h6><?php echo $row['reviewer'] ?></h6>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                                <?php
                                if ($count === 4) {
                                ?>
                                    <div class="item">
                                        <div class="circle">

                                            <div class="rcircle">
                                                <img src="./assests/images/comma.png" class="img-fluid" style="width: 90px; margin: 0 auto;" srcset="" />
                                                <p><?php echo $row['review'] ?></p>
                                                <h6><?php echo $row['reviewer'] ?></h6>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                                <?php
                                if ($count === 5) {
                                ?>
                                    <div class="item">
                                        <div class="circle">

                                            <div class="gcircle">
                                                <img src="./assests/images/comma.png" class="img-fluid" style="width: 90px; margin: 0 auto;" srcset="" />
                                                <p><?php echo $row['review'] ?></p>
                                                <h6><?php echo $row['reviewer'] ?></h6>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                                <?php
                                if ($count === 6) {
                                ?>
                                    <div class="item">
                                        <div class="circle">

                                            <div class="rcircle">
                                                <img src="./assests/images/comma.png" class="img-fluid" style="width: 90px; margin: 0 auto;" srcset="" />
                                                <p><?php echo $row['review'] ?></p>
                                                <h6><?php echo $row['reviewer'] ?></h6>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                                <?php
                                if ($count === 7) {
                                ?>
                                    <div class="item">
                                        <div class="circle">

                                            <div class="gcircle">
                                                <img src="./assests/images/comma.png" class="img-fluid" style="width: 90px; margin: 0 auto;" srcset="" />
                                                <p><?php echo $row['review'] ?></p>
                                                <h6><?php echo $row['reviewer'] ?></h6>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                                <?php
                                if ($count === 8) {
                                ?>
                                    <div class="item">
                                        <div class="circle">

                                            <div class="rcircle">
                                                <img src="./assests/images/comma.png" class="img-fluid" style="width: 90px; margin: 0 auto;" srcset="" />
                                                <p><?php echo $row['review'] ?></p>
                                                <h6><?php echo $row['reviewer'] ?></h6>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                                <?php
                                if ($count === 9) {
                                ?>
                                    <div class="item">
                                        <div class="circle">

                                            <div class="gcircle">
                                                <img src="./assests/images/comma.png" class="img-fluid" style="width: 90px; margin: 0 auto;" srcset="" />
                                                <p><?php echo $row['review'] ?></p>
                                                <h6><?php echo $row['reviewer'] ?></h6>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                                <?php
                                if ($count === 10) {
                                ?>
                                    <div class="item">
                                        <div class="circle">

                                            <div class="rcircle">
                                                <img src="./assests/images/comma.png" class="img-fluid" style="width: 90px; margin: 0 auto;" srcset="" />
                                                <p><?php echo $row['review'] ?></p>
                                                <h6><?php echo $row['reviewer'] ?></h6>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                        <?php
                            }
                        }
                        ?>
                        <!-- <div class="item">
                            <div class="circle">
                                <div class="gcircle">
                                    <img src="./assests/images/comma.png" class="img-fluid" style="width: 90px; margin: 0 auto;" srcset="" />
                                    <p>
                                        Aultricies orci ac feugiat suscipit leo massa sodales velit
                                        et scelerisque mi tortor at ipsum Proin orci odio commodo ac
                                        gravida non tristique vel te Curabitur iaculis tempus eros
                                    </p>
                                    <h6>Emma Liam</h6>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half"></i>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="circle">
                                <div class="rcircle">
                                    <img src="./assests/images/comma.png" class="img-fluid" style="width: 90px; margin: 0 auto;" srcset="" />
                                    <p>
                                        Aultricies orci ac feugiat suscipit leo massa sodales velit
                                        et scelerisque mi tortor at ipsum Proin orci odio commodo ac
                                        gravida non tristique vel te Curabitur iaculis tempus eros
                                    </p>
                                    <h6>Emma Liam</h6>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half"></i>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="circle">
                                <div class="gcircle">
                                    <img src="./assests/images/comma.png" class="img-fluid" style="width: 90px; margin: 0 auto;" srcset="" />
                                    <p>
                                        Aultricies orci ac feugiat suscipit leo massa sodales velit
                                        et scelerisque mi tortor at ipsum Proin orci odio commodo ac
                                        gravida non tristique vel te Curabitur iaculis tempus eros
                                    </p>
                                    <h6>Emma Liam</h6>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half"></i>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="circle">
                                <div class="rcircle">
                                    <img src="./assests/images/comma.png" class="img-fluid" style="width: 90px; margin: 0 auto;" srcset="" />
                                    <p>
                                        Aultricies orci ac feugiat suscipit leo massa sodales velit
                                        et scelerisque mi tortor at ipsum Proin orci odio commodo ac
                                        gravida non tristique vel te Curabitur iaculis tempus eros
                                    </p>
                                    <h6>Emma Liam</h6>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half"></i>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="circle">
                                <div class="gcircle">
                                    <img src="./assests/images/comma.png" class="img-fluid" style="width: 90px; margin: 0 auto;" srcset="" />
                                    <p>
                                        Aultricies orci ac feugiat suscipit leo massa sodales velit
                                        et scelerisque mi tortor at ipsum Proin orci odio commodo ac
                                        gravida non tristique vel te Curabitur iaculis tempus eros
                                    </p>
                                    <h6>Emma Liam</h6>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half"></i>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="circle">
                                <div class="rcircle">
                                    <img src="./assests/images/comma.png" class="img-fluid" style="width: 90px; margin: 0 auto;" srcset="" />
                                    <p>
                                        Aultricies orci ac feugiat suscipit leo massa sodales velit
                                        et scelerisque mi tortor at ipsum Proin orci odio commodo ac
                                        gravida non tristique vel te Curabitur iaculis tempus eros
                                    </p>
                                    <h6>Emma Liam</h6>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half"></i>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
</section>
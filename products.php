<?php
// include('./include/auth.php');
include('./include/config.php');
include('./include/header.php');
?>


<section class="container-fluid products">
  <div class="container">
    <div class="row">
      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
        <h2>products</h2>
      </div>
    </div>
  </div>
</section>

<!-- banner end -->

<section class="container-fluid ourproducts">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-12 mx-auto">
        <h2>our products</h2>
        <div class="hbline"></div>
        <p>Fusce ultricies orci ac feugiat suscipit leo massa sodales velit et scelerisque quam Curabitur vel dolor ultrices ipsum dictum tristique Praesent vitae lacus Ut velit enim vestibulum non fermentum nec hendrerit quis leo Pellentesque rutrum malesuada neq</p>
        <!-- main -->
        <div class="row">
          <div class="col-12 mx-auto">
            <div class="row d-flex align-items-center ">
              <div class="col etc">
                <button class="mx-auto d-block list " data-filter="cbdall">cbd all </button>
              </div>
              <div class="col etc">
                <button class="mx-auto d-block list  " data-filter="cbdoil">cbd oils </button>
              </div>
              <div class="col etc">
                <button class="mx-auto d-block list" data-filter="cbdflowers">cbd flowers </button>
              </div>
              <div class="col etc">
                <button class="mx-auto d-block list" data-filter="cbdedibles">cbd edibles </button>
              </div>
              <div class="col etc">
                <button class="mx-auto d-block list" data-filter="cbdtopical">cbd topicals </button>
              </div>
              <div class="row d-flex align-items-center">

                <?php
                $count = 0;
                $sql = "SELECT * FROM `products`";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    $count++;
                ?>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 itemBox cbdoil">
                      <div class="item">
                        <div class="product">
                          <img class="img-fluid" src="<?php
                                                      if (isset($row['file_path']))
                                                        echo "admin/uploads/products/" . $row['file_path'];
                                                      ?>" alt="">
                          <h5><?php echo $row['type'] ?></h5>
                          <p><?php echo $row['price'] ?>$</p>
                          <p style="display: none;"><?php echo $row['description'] ?></p>
                          <a href="product.php?id=<?php echo $row['id'] ?>"><button>
                              shop now <i class="fa-solid fa-angle-right"></i></button></a>
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
        <!-- buttons -->
        <!-- main -->
      </div>
    </div>
  </div>
  </div>
</section>

<!-- footer -->
<?php
include('./include/footer.php')
?>
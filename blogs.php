<?php
// session_start();
include('./include/config.php');
include('./include/header.php');
?>

<section class="container-fluid blog">
  <div class="container">
    <div class="row">
      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
        <h2>our blogs</h2>
      </div>
    </div>
  </div>
</section>

<!-- banner end -->

<section class="coontainer-fluid latest">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>latest blogs</h2>
        <div class="hbline"></div>
        <div class="row">
          <?php
          $count = 0;
          $sql = "SELECT * FROM `blogs`";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              $count++;
          ?>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div data-aos="zoom-in" data-aos-duration="3000">
                  <div class="box">
                    <img class="w-100" src="<?php
                                            if (isset($row['user_img']))
                                              echo "admin/uploads/blogs/" . $row['user_img'];
                                            ?>" alt="">

                    <div class="content">
                      <div class="date"><?php echo $row['date'] ?></div>
                      <h6><?php echo $row['type'] ?></h6>
                      <p><?php echo $row['description'] ?></p>
                      <a href="blog.php?id=<?php echo $row['id'] ?>"><button>
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
</section>

<!-- footer -->
<?php
include('./include/footer.php')
?>
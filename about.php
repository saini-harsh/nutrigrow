<?php
include('./include/config.php');
include('./include/header.php');
?>


<section class="container-fluid about">
  <div class="container">
    <div class="row">
      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
        <h2>ABOUT THE <br> NUTRIGROW OIL</h2>
      </div>
    </div>
  </div>
</section>
<!-- <script>
  window.onload = function showIt() {
    setInterval(function showIt() {
      console.log("Onload");
      document.getElementById("hid").style.display = "block";
      $('body').css('overflow', 'hidden')
    }, 3000);
  };
</script> -->
<!-- banner end -->
<div class="container-fluid bgdrk" id="hid" >
  <div class="container">
    <div class="row">
      <div class="col-5 eform mx-auto">
        <h2>Enquiry now</h2>
        <div class="hbline"></div>
        <div class="row">
          <div class="col mx-4">
            <input type="text" name="" id="" placeholder="Name">
            <input type="email" name="" id="" placeholder="Email">
            <textarea name="" class="w-100" id="" placeholder="Message"></textarea>
            <button type="submit" name="" style="margin: 0 auto; display: block">
              send <i class="fa-solid fa-angle-right"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="container-fluid who" style="overflow-x: hidden !important;">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        <img src="./assests/images/aboutpage/who-img.png" alt="" srcset="" class="img-fluid mx-auto d-block" />
      </div>
      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        <h2>who we are</h2>
        <div class="hbline"></div>
        <p>
          lorem is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
        </p>
        <p>
          lorem is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now
        </p>
      </div>
    </div>
  </div>
</section>
<?php
include('./include/featuredproduct.php');
include('./include/trustedlogo.php');
?>


<section class="container-fluid vision">
  <div class="container">
    <div class="row">
      <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12">
        <h2>our vision</h2>
        <div class="hbline"></div>
        <p>
          lorem is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.lorem is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using.
        </p>
      </div>
    </div>
  </div>
</section>
<div class="fanfact-block pd-b-130 pd-t-130">
        <div class="container">
            <div class="row fanfact-promo-numbers justify-content-center">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="promo-number style-two">
                        <div class="promo-number-inner">
                            <div class="icon">
                                <img src="./assests/images/1.png" alt="Icon" />
                            </div>
                            <div class="info">
                                <div class="odometer-wrap">
                                    <div class="odometer" data-odometer-final="10">0</div>
                                    k+
                                </div>
                                <h4 class="promo-title">Average yearly orders</h4>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="promo-number style-two">
                        <div class="promo-number-inner">
                            <div class="icon">
                                <img src="./assests/images/2.png" alt="Icon" />
                            </div>
                            <div class="info">
                                <div class="odometer-wrap">
                                    <div class="odometer" data-odometer-final="100">0</div>
                                    %
                                </div>
                                <h4 class="promo-title">Increase in monthly sales</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="promo-number style-two">
                        <div class="promo-number-inner">
                            <div class="icon">
                                <img src="./assests/images/3.png" alt="Icon" />
                            </div>
                            <div class="info">
                                <div class="odometer-wrap">
                                    <div class="odometer" data-odometer-final="20">0</div>
                                    X+
                                </div>
                                <h4 class="promo-title">Increase in quarterly views overall</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- footer -->
<?php
include('./include/footer.php')
?>
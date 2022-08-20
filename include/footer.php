<footer>
    <div class="container">
        <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <a href="index.php" title="Logo"><img src="./assests/images/flogo.png" class="img-fluid" alt="" srcset=""></a>
                <div class="one">
                    <i class="fa-solid fa-location-dot"></i>
                    <a href="#" title="Address">68, New Delhi. #110036 </a> <br>
                    <i class="fa-solid fa-phone"></i>
                    <a href="tel:+9310167293" title="Call Now">+91 9310167293</a> <br>

                    <i class="fa-solid fa-envelope"></i>
                    <a href="mailto:harshsainipc859@gmail.com" title="Email">harshsainipc859@gmail.com</a>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="two">
                    <ul>
                        <h5>Information</h5>
                        <li><a href="index" title="Home"><i class="fa-solid fa-caret-right"></i>Home</a></li>
                        <li><a href="products.php" title="Products"><i class="fa-solid fa-caret-right"></i>products</a></li>
                        <li><a href="services.php" title="Services"><i class="fa-solid fa-caret-right"></i>services</a></li>
                        <li><a href="labtest.php" title="Lab Test"><i class="fa-solid fa-caret-right"></i>Lab test</a></li>
                        <li><a href="partners.php" title="Partners"><i class="fa-solid fa-caret-right"></i>Patners</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="two">
                    <ul>
                        <h5>Recourses</h5>
                        <li><a href="about.php" title="about us"><i class="fa-solid fa-caret-right"></i>About us</a></li>
                        <li><a href="news.php" title="news"><i class="fa-solid fa-caret-right"></i>News</a></li>
                        <li><a href="faq.php" title="faq"><i class="fa-solid fa-caret-right"></i>faq</a></li>
                        <li><a href="returnpolicy.php" title="return policy"><i class="fa-solid fa-caret-right"></i>return policy</a></li>
                        <li><a href="wholesale.php" title="wholesale"><i class="fa-solid fa-caret-right"></i>wholesale</a></li>
                        <li><a href="contact.php" title="contact us"><i class="fa-solid fa-caret-right"></i>contact us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="four">
                    <ul>
                        <h5>Join Our Newsletters</h5>

                        <form action="" id="footerform" onsubmit="return validatenews(this)" method="post">
                            <input type="email" title="email address" name="nemail" id="nemail" placeholder="Your Email address" onblur="fornamenews(this)">
                            <span class="errn">
                                <h6 id="student-newsemail"></h6>
                            </span>
                            <button type="submit" name="fsubmit">
                                Submit <i class="fa-solid fa-angle-right"></i></button>
                            <div class="done">
                                <span id="success"></span>
                            </div>
                        </form>

                        <div class="row mt-3">
                            <div class="col lbutton">
                                <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                                <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                                <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="row bmail mt-3">
                            <div class="col">
                                <i class="fa-solid fa-envelope"></i>
                                <a href="mailto:harshsainipc859@gmail.com" title="Email">harshsainipc859@gmail.com</a>
                            </div>
                        </div>

                    </ul>


                </div>
            </div>
        </div>

    </div>
</footer>
<section class="container-fluid strip ">
    <div class="container">
        <div class="row ">
            <div class="col bordertop">
                <p>© Copyright 2022. The Nutrigrow Oil All Rights Reserved</p>
                <a href="#">Privacy Policy | Terms and Condition | Disclaimer</a>
            </div>
        </div>
    </div>
</section>
<!-- script tags start -->
<script src="./assests/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./assests/js/jquery.min.js"></script>
<script src="./assests/js/owl.carousel.js"></script>
<script src="./assests/js/nav.js"></script>
<script src="./assests/js/testimonials.js"></script>
<script src="./assests/js/featured.js"></script>
<script src="./assests/js/opendata.js"></script>
<script src="./assests/js/cannabinoids.js"></script>
<script src="./assests/js/focused.js"></script>
<script src="./assests/js/datafilter.js"></script>
<script src="./assests/js/productsbutton.js"></script>
<script src="./assests/js/contact/indexcontact.js"></script>
<script src="./assests/js/contact/contact.js"></script>
<script src="./assests/js/contact/newsletter.js"></script>
<script src="./assests/js/contact/signup.js"></script>
<script src="./assests/js/cart/cart.js"></script>
<script src="./assests/js/product.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="./assests/js/gototop.js"></script>
<script src="./assests/js/ajax.js"></script>
<script>
    AOS.init();
</script>
<!-- script tags end -->

<script>
    $(document).ready(function() {
        $('#footerform').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: 'newsletter.php',
                data: $(this).serialize(),
                // data: new FormData,
                success: function(response) {
                    $("#success").html(response);
                }
            });
        });
    });
</script>
</body>

</html>
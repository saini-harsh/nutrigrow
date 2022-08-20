<?php
include('./include/config.php');
include('./include/header.php');
?>


<section class="container-fluid mcontact">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <h2>contact us</h2>
            </div>
        </div>
    </div>
</section>

<!-- banner end -->

<section class="container-fluid contactform">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12 mx-auto">
                <h2>contact now</h2>
                <div class="hbline"></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae ullam rem dolor aperiam voluptatum maxime voluptas ipsum, sunt perspiciatis quia, corporis ut veniam inventore id error tempora? Ut esse explicabo quia libero ipsam eius accusamus sit commodi?</p>

                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" id="cform" onsubmit="return validate2(this)" method="POST">
                    <div class="main">

                        <input type="text" name="name" id="name" placeholder="First Name" onblur="fornamem(this)">
                        <span class="errb">
                            <h6 id="student-namem"></h6>
                        </span>
                        <input type="text" name="lname" id="lname" placeholder="Last Name" onblur="fornamem(this)">
                        <span class="errb">
                            <h6 id="student-lnamem"></h6>
                        </span>
                        <input type="email" name="email" id="email" placeholder="Email " onblur="fornamem(this)">
                        <span class="errb">
                            <h6 id="student-emailm"></h6>
                        </span>
                        <input type="tel" name="pphone" id="pphone" placeholder="Phone Number" maxlength="10" onblur="fornamem(this)">
                        <span class="errb">
                            <h6 id="student-phonem"></h6>
                        </span>
                        <input type="tel" name="ophone" id="ophone" placeholder="Order Number" maxlength="10" onblur="fornamem(this)">
                        <span class="errb">
                            <h6 id="student-ophonem"></h6>
                        </span>
                    </div>
                    <h4>Subject</h4>
                    <h6>Please describes in detail any questions, or issues</h6><br>
                    <textarea name="msg" id="msg" onblur="fornamem(this)"></textarea>
                    <span class="errb">
                        <h6 id="student-msgm"></h6>
                    </span>
                    <button type="submit" class="btnbtnm" name="csubmit">Submit <i class="fa-solid fa-angle-right"></i></button>
                    <div class="done">
                        <span id="success"></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
<?php
include('./include/footer.php')
?>
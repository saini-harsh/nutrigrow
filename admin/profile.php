<?php
include('./include/adminauth.php');
include('../include/config.php');
include('./include/adheader.php');
?>
<div class="container-fluid ">
    <div class="row ">
        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4 col-12">
            <?php
            include('./include/sidebar.php');
            ?>
        </div>
        <div class="col-xxl-10 col-xl-10 col-lg-9 col-md-9 col-sm-8 col-12  mt-3">
            <div class="row">
                <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm- 3 col-6a">
                    <div class="breadcrumb">
                        <ul>
                            <li>Home</li> &dash;
                            <li>Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="profile greybg">
                <div class="">
                    <div class="cbox">
                        <form action="" method="POST" onsubmit="return svalidate(this);">
                            <div class="row d-flex align-items-center mt-3">
                                <?php

                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input type="text" name="fname" id="fname" placeholder="First Name" onblur="forname(this)" value="<?php echo $row['fname'] ?>">
                                            <span style="color: red;" name="errfname"> <?php if (isset($errfname)) echo $errfname; ?></span>
                                            <span class="err">
                                                <h6 id="sfname"></h6>
                                            </span>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input type="text" name="lname" id="lname" placeholder="Last Name" onblur="forname(this)" value="<?php echo $row['lname'] ?>">
                                            <span style="color: red;" name="errlname"> <?php if (isset($errlname)) echo $errlname; ?></span>
                                            <span class="err">
                                                <h6 id="slname"></h6>
                                            </span>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input type="email" name="email" id="email" placeholder="Email Address" onblur="forname(this)" value="<?php echo $row['email'] ?>">
                                            <span style="color: red;" name="erremail"> <?php if (isset($erremail)) echo $erremail; ?></span>
                                            <span class="err">
                                                <h6 id="semail"></h6>
                                            </span>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input type="tel" name="phone" id="phone" maxlength="10" placeholder="Phone Number" onblur="forname(this)" value="<?php echo $row['phone'] ?>">
                                            <span style="color: red;" name="errphone"> <?php if (isset($errphone)) echo $errphone; ?></span>
                                            <span class="err">
                                                <h6 id="sphone"></h6>
                                            </span>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input type="password" name="pass" id="pass" placeholder="Password" onblur="forname(this)" value="<?php echo $row['pass'] ?>">
                                            <span style="color: red;" name="errpass"> <?php if (isset($errpass)) echo $errpass; ?></span>
                                            <span class="err">
                                                <h6 id="spass"></h6>
                                            </span>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input type="password" name="cfpass" id="cfpass" placeholder="Confirm Password" onblur="forname(this)" value="<?php echo $row['pass'] ?>">
                                            <span class="err">
                                                <h6 id="scfpass"></h6>
                                            </span>
                                        </div>
                            </div>
                            <p>Your personal data will be used to support your experience throughout this website, to manage access to your account,
                                and for other purposes described in our privacy policy.
                            </p>
                            <button type="submit" name="submit " class="mx-auto d-block">
                                Update Now <i class="fa-solid fa-angle-right"></i></button>
                    <?php
                                    }
                                }
                    ?>
                        </form>
                        <?php
                        if (isset($_POST['submit'])) {
                            $fname = $_POST['fname'];
                            $lname = $_POST['lname'];
                            $email = $_POST['email'];
                            $phone = $_POST['phone'];
                            $pass = md5($_POST['pass']);

                            $update_data = "UPDATE admin_signup_data SET admin_signup_data.fname='$fname',admin_signup_data.lname='$lname', admin_signup_data.email='$email',admin_signup_data.phone='$phone',admin_signup_data.pass='$pass'";


                            $result = mysqli_query($conn, $update_data);
                            if ($result) {
                                echo "success";
                            } else {
                                echo "Update Failed";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
include('./include/adfooter.php');
?>
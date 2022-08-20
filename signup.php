<?php
// session_start();
include('./include/config.php');
include('./include/header.php');
?>


<section class="container-fluid signup">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 mx-auto">
                <div class="row">
                    <div class="col">
                        <div class="cbox">
                            <h3>SIgn up</h3>
                            <div class="hbline"></div>

                            <?php
                            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                $err_count = 0;
                                function validate_data($data)
                                {
                                    $data = trim($data);
                                    $data = stripslashes($data);
                                    $data = htmlspecialchars($data);
                                    return $data;
                                }
                                if (empty($_POST["fname"])) {
                                    $errfname = "Name is required";
                                    $err_count++;
                                } else {
                                    $fname = validate_data($_POST["fname"]);
                                    // check if name only contains letters and whitespace
                                    if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
                                        $errfname = "Only letters and white space allowed";
                                        $err_count++;
                                    }
                                }

                                if (empty($_POST["lname"])) {
                                    $errlname = "Name is required";
                                    $err_count++;
                                } else {
                                    $lname = validate_data($_POST["lname"]);
                                    // check if name only contains letters and whitespace
                                    if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
                                        $errlname = "Only letters and white space allowed";
                                        $err_count++;
                                    }
                                }

                                if (empty($_POST["email"])) {
                                    $erremail = "Student Email is required";
                                    $err_count++;
                                } else {
                                    $email = validate_data($_POST["email"]);
                                    // check if e-mail address is well-formed
                                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                        $erremail = "Invalid email format";
                                        $err_count++;
                                    }
                                }

                                if (empty($_POST["phone"])) {
                                    $errphone = "Student phone is required";
                                    $err_count++;
                                } else {
                                    $phone = validate_data($_POST["phone"]);
                                    // check if name only contains letters and whitespace
                                    if (!preg_match("/^[0-9' ]*$/", $phone)) {
                                        $errphone = "Only numbers are allowed";
                                        $err_count++;
                                    }
                                }

                                if (empty($_POST["pass"])) {
                                    $errpass = "Student password is required";
                                    $err_count++;
                                } else {
                                    $pass = validate_data($_POST["pass"]);
                                    // check if name only contains letters and whitespace
                                    if (!preg_match("/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/", $pass)) {
                                        $errpass =         "Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character*";;
                                        $err_count++;
                                    }
                                }
                                $pass = md5($_POST['pass']);
                                $cfpass = md5($_POST['cfpass']);

                                if ($err_count === 0) {

                                    if ($pass === $cfpass) {

                                        $sql_insert = "INSERT INTO `signup_data`(`fname`, `lname`, `email`, `phone`, `pass`) VALUES ('$fname','$lname','$email','$phone','$pass')";

                                        if (mysqli_query($conn, $sql_insert)) {
                                            $_SESSION['signupemail'] = $email;
                                            $_SESSION['signupfname'] = $fname;
                                            // echo "Signup success";
                                            // header('location:login.php');
                            ?>
                                            <script>
                                                window.location.href = "signin.php";
                                            </script>
                            <?php
                                        } else {
                                            echo "regestration failed";
                                        }
                                    } else {
                                        echo "password not matched";
                                    }
                                }
                            }
                            ?>

                            <form action="" method="POST" onsubmit="return svalidate(this);">
                                <div class="row d-flex align-items-center mt-3">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input type="text" name="fname" id="fname" placeholder="First Name" onblur="forname(this)">
                                        <span style="color: red;" name="errfname"> <?php if (isset($errfname)) echo $errfname; ?></span>
                                        <span class="err">
                                            <h6 id="sfname"></h6>
                                        </span>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input type="text" name="lname" id="lname" placeholder="Last Name" onblur="forname(this)">
                                        <span style="color: red;" name="errlname"> <?php if (isset($errlname)) echo $errlname; ?></span>
                                        <span class="err">
                                            <h6 id="slname"></h6>
                                        </span>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input type="email" name="email" id="email" placeholder="Email Address" onblur="forname(this)">
                                        <span style="color: red;" name="erremail"> <?php if (isset($erremail)) echo $erremail; ?></span>
                                        <span class="err">
                                            <h6 id="semail"></h6>
                                        </span>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input type="tel" name="phone" id="phone" maxlength="10" placeholder="Phone Number" onblur="forname(this)">
                                        <span style="color: red;" name="errphone"> <?php if (isset($errphone)) echo $errphone; ?></span>
                                        <span class="err">
                                            <h6 id="sphone"></h6>
                                        </span>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input type="password" name="pass" id="pass" placeholder="Password" onblur="forname(this)">
                                        <span style="color: red;" name="errpass"> <?php if (isset($errpass)) echo $errpass; ?></span>
                                        <span class="err">
                                            <h6 id="spass"></h6>
                                        </span>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input type="password" name="cfpass" id="cfpass" placeholder="Confirm Password" onblur="forname(this)">
                                        <span class="err">
                                            <h6 id="scfpass"></h6>
                                        </span>
                                    </div>
                                </div>
                                <p>Your personal data will be used to support your experience throughout this website, to manage access to your account,
                                    and for other purposes described in our privacy policy.
                                </p>
                                <button type="submit" name="submit " class="mx-auto d-block">
                                    Sign Up <i class="fa-solid fa-angle-right"></i></button>
                                <div class="mx-auto" style="text-align: center; margin-top: 20px;">
                                    <h6>- OR -</h6>
                                    <a href="signin.php">I already have an account</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- signup end -->

<!-- footer -->
<?php
include('./include/footer.php')
?>
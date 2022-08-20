<?php
// session_start();
include('./include/config.php');
include('./include/header.php');
?>


<section class="container-fluid signin">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-10 col-sm-12 col-12 mx-auto">
                <div class="row">
                    <div class="col">
                        <div class="cbox">
                            <h3>SIgn in</h3>
                            <div class="hbline"></div>
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                $email = $_POST['email'];
                                $pass = md5($_POST['pass']);
                                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                    // $sql = "SELECT * FROM user_data WHERE email = '$email' AND pass='$pass'";
                                    $sql = "SELECT * FROM signup_data WHERE email = '$email' AND pass='$pass'";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $_SESSION['signinemail'] = $email;
                                        // header('location:index.php');
                            ?>
                                        <script>
                                            window.location.href = "index.php";
                                        </script>
                            <?php
                                    } else {
                                        // echo "login failed";
                                        $errsignin = "Sign In failed";
                                    }
                                }
                            }
                            ?>
                            <form action="" method="POST">
                                <div class="row d-flex align-items-center mt-3">
                                    <div class="col-12">
                                        <input type="email" name="email" id="" placeholder="Username or email address*">
                                    </div>
                                    <div class="col-12">
                                        <input type="password" name="pass" id="" placeholder="Password*">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 chbox">
                                        <input type="checkbox" name="remember" id="">
                                        <label for="remember">Remember Me</label>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 forgot">
                                        <a href="#" title="forget password">Forget Password?</a>
                                    </div>
                                </div>
                                <button type="submit" name="submit" value="submit" class="mx-auto d-block">
                                    Sign in <i class="fa-solid fa-angle-right"></i></button>
                                <div class="" style="text-align: center; color:red;">
                                    <?php
                                    if (isset($_POST['submit'])) {
                                        echo $errsignin;
                                    }
                                    ?>
                                </div>
                            </form>
                            <div class="mx-auto" style="text-align: center; margin-top: 20px;">
                                <h6>- OR -</h6>
                                <a class="justify-content-center" href="signup.php">Don't have an account ?</a>
                            </div>

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
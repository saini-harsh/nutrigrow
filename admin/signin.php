<div style="display: none;">
    <?php
    session_start();
    include('../include/config.php');
    include('./include/adheader.php');
    ?>
</div>
<?php
?>


<section class="container-fluid signin">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-10 col-sm-12 col-12 mx-auto">
                <div class="row">
                    <div class="col">
                        <div class="cbox">
                            <h3>Admin SIgn in</h3>
                            <div class="hbline"></div>

                            <?php
                            if(isset($_POST['submit']))
                            {
                                $sql = "SELECT * FROM `admin_new` WHERE `email` = '$_POST[email]' AND `pass`='$_POST[pass]'";
                                    $result = mysqli_query($conn, $sql);
                                    if(mysqli_num_rows($result)==1)
                                    {
                                        session_start();
                                        $_SESSION['email']=$_POST['email'];
                                        ?>
                                        <script>
                                            window.location.href = "index.php";
                                        </script>
                                        <?php
                                    }
                                    else{
                                        echo "<script>
                                        alert('incorrect password');
                                    </script>";
                                    }
                            } 
                            ?>
                            <form action="#" method="POST">
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
                                    <!-- <?php
                                    if (isset($_POST['submit'])) {
                                        echo $errsignin;
                                    }
                                    ?> -->
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
<?php
include('./include/adfooter.php');
?>
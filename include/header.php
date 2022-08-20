<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Boostrap cdn -->
    <link rel="stylesheet" href="./assests/bootstrap/css/bootstrap.min.css" />
    <!-- StyleSheet cdn -->
    <link rel="stylesheet" href="./assests/css/style.css" />
    <!-- Font Awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,300&family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet" />

    <!-- owl css -->
    <link rel="stylesheet" href="./assests/css/owl/animate.css" />
    <link rel="stylesheet" href="./assests/css/owl/owl.carousel.css" />
    <link rel="stylesheet" href="./assests/css/owl/owl.theme.green.css" />

    <!-- aos library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- favicon icon -->
    <link rel="shortcut icon" href="./assests/images/flogo.png" type="image/x-icon" />
    <title>NUTRIGROW</title>
</head>

<body>

    <div class="container-fluid topheader">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="row">
                        <div class="col lbutton">
                            <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                            <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                            <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mx-auto">
                    <a href="index"><img src="./assests/images/logo.png" class="img-fluid" title="logo" alt="" srcset="" /></a>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 rbutton">
                    <div class="row">
                        <div class="col">
                            <a href="signin" title="Sign In"><i class="fa-solid fa-user"></i></a>
                            <a href="signup" title="Sign Up"><i class="fa-solid fa-user-plus"></i></a>
                            <?php
                            session_start();
                            if (isset($_SESSION['signinemail'])) {
                            ?>
                                <a href="include/logout.php" title="Logout"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                            <?php
                            }
                            ?>
                            <!-- modal -->
                            <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalToggleLabel">Search anything</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <input type="text" size="30" class="mx-auto d-block" onkeyup="showResult(this.value)">
                                                <div id="livesearch"></div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Hide this modal and show the first with the button below.
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a data-bs-toggle="modal" href="#exampleModalToggle"><i class="fa-solid fa-magnifying-glass"></i></a>
                            <!-- modal -->
                            <!-- <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a> -->
                            <?php
                            $count = 0;
                            if (isset($_SESSION['harsh'])) {
                                $count = count($_SESSION['harsh']);
                            }
                            ?>
                            <a href="cart.php"><i class="fas fa-cart-plus"></i>
                                <span style="color: #fff;"><?php echo $count; ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sticky">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container ">
                <a class="navbar-brand" href="index.php">
                    <img src="./assests/images/logo.png" class="img-fluid" alt="" srcset="" />
                </a>
                <button class="navbar-toggler custom-toggler" type="button" onclick="openNav()">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse overlay" id="navbarSupportedContent">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link activee" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="products" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                products
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="products.php">CBD Oils</a></li>
                                <li><a class="dropdown-item" href="products.php">CBD Flowers</a></li>
                                <li><a class="dropdown-item" href="products.php">CBD Edibles</a></li>
                                <li><a class="dropdown-item" href="products.php">CBD Topicals</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="services.php">services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">about us</a>
                        </li>
                        <li class="nav-item">
                            <a href="labtest.php" class="nav-link">lab test</a>
                        </li>
                        <li class="nav-item">
                            <a href="partners.php" class="nav-link">partners</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                news and recourses
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="blogs.php">Blogs</a></li>
                                <li><a class="dropdown-item" href="news.php">News</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="wholesale.php">wholesale</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="topbtn">
        <a href="#" class="scrollToTop">
            <i class="fa-solid fa-arrow-up-long"></i>
        </a>
    </div>
    <div id="mySidenav" class="sidenav">
        <a href="https://www.facebook.com/" id="fb"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/" id="twt"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/" id="ins"><i class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/" id="ytb"><i class="fab fa-youtube"></i></a>
        <a href="https://www.linkedin.com/" id="link"><i class="fab fa-linkedin-in"></i></a>
    </div>
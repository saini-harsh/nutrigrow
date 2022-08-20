<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Boostrap cdn -->
    <link rel="stylesheet" href="../assests/bootstrap/css/bootstrap.min.css" />
    <!-- StyleSheet cdn -->
    <link rel="stylesheet" href="../assests/css/style.css" />
    <!-- Font Awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- table js -->
    <!-- jquery cdn -->
    <link rel="stylesheet" href="http://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- cart js -->


    <!-- font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,300&family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet" />

    <!-- owl css -->
    <link rel="stylesheet" href="../assests/css/owl/animate.css" />
    <link rel="stylesheet" href="../assests/css/owl/owl.carousel.css" />
    <link rel="stylesheet" href="../assests/css/owl/owl.theme.green.css" />
    <!-- favicon icon -->
    <link rel="shortcut icon" href="./assests/images/" type="image/x-icon" />
    <title>Nutrigrow</title>
</head>

<body style="background-color: #f4f4f4;">

    <div class="navbar navbar-expand-lg  navbar-dark bg-dark adheader" aria-label="Main navigation">
        <div class="container-fluid ">
            <!-- <a class="navbar-brand" href="#">Offcanvas navbar</a> -->
            <a href="index.php"><img src="../assests/images/logo.png" class="img-fluid " title="logo" alt="" style="width: 250px;" srcset="" /></a>

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mx-auto d-block mb-2 mb-lg-0">
                    <form class="d-flex py-2">
                        <input class="form-control me-2" type="search" placeholder="&#128269; Enter Keyword" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </ul>
                <img src="../assests/images/adminpanel/profile.png" class="img-fluid" alt="" srcset="">
                <?php
                $email = $_SESSION['email'];
                $sql = "SELECT * FROM admin_new WHERE email = '$email'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <a href="#" style="text-transform: uppercase; color: #2a8b03; font-weight: 600;" class="px-2"> Welcome <?php echo $row['usertype']; ?> !</a>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
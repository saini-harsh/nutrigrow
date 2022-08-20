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
                            <li>Users</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="profile greybg">
                <div class="">
                    <div class="cbox">

                        <div class="table-responsive">
                            <!-- table table-bordered  -->
                            <table id="myTable" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count = 0;

                                    $sql = "SELECT * from signup_data ";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $count++;

                                    ?>
                                            <tr style="text-transform: uppercase;">
                                                <td><?php echo $count; ?></td>
                                                <td><?php echo $row['fname'] ?></td>
                                                <td><?php echo $row['lname'] ?></td>
                                                <td><?php echo $row['email'] ?></td>
                                                <td>+91 <?php echo $row['phone'] ?></td>
                                                <td><?php echo $row['pass'] ?></td>
                                                <td><a class="btn1 btn btn-primary" href="useredit.php?id=<?php echo $row['id'] ?>">Edit</a>
                                                    <a class="btn btn-danger" href="userdelete.php?id=<?php echo $row['email']; ?>">Delete</a>
                                                </td>
                                                <!-- <td></td> -->

                                            </tr>
                                    <?php

                                        }
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
include('./include/adfooter.php');
?>
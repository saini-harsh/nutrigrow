<?php
// include('./include/auth.php');
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
                            <li>News</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="profile greybg">
                <div class="">
                    <div class="cbox">
                        <div class="table-responsive">
                            <table id="myTable" class="display table table-bordered" style="width: 100%;">
                                <div class="py-3">
                                    <a href="newsadd.php"><button class="mx-auto d-block btn-primary ">Add Now</button></a>
                                </div>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>file_path</th>
                                        <th>date</th>
                                        <th>type</th>
                                        <th>description</th>
                                        <th>time</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count = 0;

                                    $sql = "SELECT * FROM `news`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $count++;
                                    ?>


                                            <tr>
                                                <td><?php echo $count; ?></td>
                                                <!-- <td><?php echo $row['file_path'] ?></td> -->
                                                <td><img style="width: 100px;" class="img-fluid" src="<?php
                                                                                                        if (isset($row['file_path']))
                                                                                                            echo "uploads/news/" . $row['file_path'];
                                                                                                        ?>" alt=""></td>
                                                <td><?php echo $row['date'] ?></td>
                                                <td><?php echo $row['type'] ?></td>
                                                <td><?php echo $row['description'] ?></td>
                                                <td><?php echo $row['time'] ?></td>
                                                <td>
                                                    <a class="btn1 btn btn-primary" href="newsedit.php?id=<?php echo $row['id'] ?>">Edit</a>
                                                    <a class="btn btn-danger" href="newsdelete.php?id=<?php echo $row['id']; ?>">Delete</a>
                                                </td>


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
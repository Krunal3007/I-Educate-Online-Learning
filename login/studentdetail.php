<?php include('../includes/config.php') ?>
<!-- include('../admin/header.php')  -->
<?php include('./sidebar.php') ?>



<!DOCTYPE html>
<html lang="en">




<body>





    <div class="content-wrapper mt-0">
        <div class="px-3 py-2">
            <h1 class="text-primary">Details</h1>
        </div>
        <div class="container-fluid py-3">
        </div>

        <!-- new  -->
        <div class="card">

            <div class="card-body">

                <div class="table-responsive">









                    <?php


                    $user_query = 'SELECT * FROM users WHERE `username` = "' . $_SESSION['username'] . '"';
                    $User_result = mysqli_query($db_conn, $user_query);
                    while ($users = mysqli_fetch_object($User_result)) { ?>

                        <div>
                            <h5 class="text-primary">User Name</h5>
                        </div>
                        <div>
                            <h5><?= $users->username ?></h5>
                        </div>
                        <br>
                        <div>
                            <h5 class="text-primary">Email</h5>
                        </div>
                        <div>
                            <h5><?= $users->email ?></h5>
                        </div>
                        <br>
                        <div>
                            <h5 class="text-primary"><a href="#">Change Password</a></h5>
                        </div>
                        <div>

                            <!-- <h5>?= $users->password ?</h5> -->
                        </div>

                        </tr>

                    <?php } ?>




                </div>
            </div>
        </div>

    </div>

    </div>
    <?php include('../admin/footer.php') ?>
    </div>







</body>


</html>

<!-- new navbar  -->












<!-- new  -->
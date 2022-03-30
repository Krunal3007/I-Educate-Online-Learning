<?php include('../includes/config.php') ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>

<?php
$error = '';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type = $_POST['type'];

    $check_query = mysqli_query($db_conn, "SELECT * FROM accounts WHERE email = '$email'");
    if (mysqli_num_rows($check_query) > 0) {
        $error = 'Email already exists';
    } else {

        mysqli_query($db_conn, "INSERT INTO accounts  (`name`,`email`,`password`,`type`) VALUES ('$name','$email','$password','$type')  ") or die('DB Error');

        $_SESSION['success_msg'] = 'User has been added Successfully';
        // header('Location: user-account.php?user=' . $type);
        // exit;
    }
}
?>


<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Manage Accounts </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <!-- <li class="breadcrumb-item active">?php echo ucfirst($_REQUEST['user']) ?> </li> -->
                </ol>
            </div><!-- /.col -->

            <?php
            if (isset($_SESSION['success_msg'])) { ?>
                <div class="col-12">
                    <small class="text-primary" style="font-size: 20px"><?= $_SESSION['success_msg'] ?></small>
                </div>
            <?php
                unset($_SESSION['success_msg']);
            } ?>

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <?php
        if (isset($_REQUEST['action'])) { ?>
            <!-- Info boxes -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Details</h3>

                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" placeholder="Name" required class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="email"> Email</label>
                            <input type="email" name="email" placeholder="Email" required class="form-control">
                            <?php echo $error ?>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" name="password" placeholder="Password" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="type">Category</label>
                            <select name="type" id="type" class="form-control">
                                <option value="">Select Category</option>
                                <option value="counseller">Counseller</option>
                                <option value="teacher">Teacher</option>
                                <option value="student">Student</option>
                                <option value="parent">Parent</option>
                                <option value="librarian">Librarian</option>
                            </select>
                        </div>



                        <button name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->

        <?php } else { ?>


            <!-- Info boxes -->

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Courses</h3>
                    <div class="card-tools">
                        <a href="?action=add-new" class="btn btn-primary btn-sm"><i class="fa fa-plus mr-2"></i>Add New</a>
                    </div>
                </div>
                <div class="card-body">

                    <div class="table-responsive">


                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>

                                    <!-- <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $count = 1;
                                $user_query = 'SELECT * FROM accounts WHERE `type` = "' . $_REQUEST['user'] . '"';
                                $User_result = mysqli_query($db_conn, $user_query);
                                while ($users = mysqli_fetch_object($User_result)) { ?>
                                    <tr>
                                        <td><?= $count++ ?></td>
                                        <td><?= $users->name ?></td>
                                        <td><?= $users->email ?></td>
                                        <td><?= $users->password ?></td>


                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>



                    </div>
                </div>
            </div>

            <!-- /.row -->

        <?php } ?>


    </div>
    <!--/. container-fluid -->

</section>
<!-- /.content -->

<?php include('footer.php') ?>
<?php include('../includes/config.php') ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>



<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Student Details </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Buyers </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">



        <!-- Info boxes -->

        <div class="card">
            <div class="card-header">
                <!-- <h3 class="card-title">Information</h3> -->

            </div>
            <div class="card-body">

                <div class="table-responsive">


                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Order Id</th>
                                <th>Email</th>
                                <th>Course Id</th>
                                <th>Status</th>
                                <th>Response Msg</th>
                                <th>Amount</th>
                                <th>Date</th>

                                <!-- <th>Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $count = 1;
                            $user_query = 'SELECT * FROM courseorder ';
                            $User_result = mysqli_query($db_conn, $user_query);
                            while ($users = mysqli_fetch_object($User_result)) { ?>
                                <tr>
                                    <td><?= $count++ ?></td>
                                    <td><?= $users->order_id ?></td>
                                    <td><?= $users->stu_email ?></td>
                                    <td><?= $users->course_id ?></td>
                                    <td><?= $users->status ?></td>
                                    <td><?= $users->respmsg ?></td>
                                    <td><?= $users->amount ?>/-Rs</td>
                                    <td><?= $users->order_date ?></td>

                                    <!-- <td></td> -->
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>



                </div>
            </div>
        </div>

        <!-- /.row -->




    </div>
    <!--/. container-fluid -->
</section>
<!-- /.content -->

<?php include('footer.php') ?>
<?php include('../includes/config.php') ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>



<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Student Feedback </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Student </li>
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
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Content</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            $count = 1;
                            $student_query = 'SELECT * FROM feedback ';
                            $student_result = mysqli_query($db_conn, $student_query);
                            while ($student = mysqli_fetch_object($student_result)) { ?>
                                <tr>
                                    <td><?= $count++ ?></td>
                                    <td><?= $student->name ?></td>
                                    <td><?= $student->email ?></td>
                                    <td><?= $student->content ?></td>
                                    <td>
                                        <form action="" method="POST" class="d-inline"><input type="hidden" name="feedbackdelete" value=<?= $student->id ?>><button type="submit" class="btn btn-primary" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button></form>
                                    </td>


                                    <!-- <td></td> -->
                                </tr>

                            <?php } ?>




                        </tbody>
                    </table>




                </div>
            </div>
        </div>

        <!-- /.row -->

        <?php
        if (isset($_REQUEST['delete'])) {
            $delete = "DELETE FROM feedback WHERE id = {$_REQUEST['feedbackdelete']}";
            if ($db_conn->query($delete) == TRUE) {
                // echo 'Record Deleted Successfully';
                // below code will refresh the page after deleting the record 
                echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
            } else {

                echo 'Unable to Delete Data';
            }
        }
        ?>


    </div>
    <!--/. container-fluid -->
</section>
<!-- /.content -->

<?php include('footer.php') ?>
<?php include('../includes/config.php') ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>

<?php
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $sections = implode(',', $_POST['section']);
    $added_date = date('Y-m-d');

    mysqli_query($db_conn, "INSERT INTO classes (title,section,added_date) VALUE ('$title','$sections','$added_date')") or die('DB Error');
}
?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Manage Classes </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Classes </li>
                </ol>
            </div><!-- /.col -->
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
                    <h3 class="card-title">Add New Class</h3>

                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" placeholder="Title" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="section">Section</label>
                            <?php
                            $query = mysqli_query($db_conn, 'SELECT * FROM sections');
                            $count = 1;

                            while ($sections = mysqli_fetch_object($query)) { ?>

                                <div>
                                    <label for="<?= $count ?>">
                                        <input type="checkbox" id="<?= $count ?>" value="<?= $sections->id ?>" name="section[]" placeholder="Section">
                                        <?= $sections->title ?>
                                    </label>
                                </div>

                            <?php
                                $count++;
                            } ?>
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
                    <h3 class="card-title">Classes</h3>
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
                                    <th>Section</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 1;
                                $cla_query = mysqli_query($db_conn, 'SELECT * FROM classes');
                                while ($class = mysqli_fetch_object($cla_query)) { ?>

                                    <tr>
                                        <td><?= $count++ ?></td>
                                        <td><?= $class->title ?></td>
                                        <td>
                                            <?php
                                            $sections = explode(',', $class->section);
                                            foreach ($sections as $section) {
                                                $sec_query = mysqli_query($db_conn, 'SELECT * FROM sections WHERE id = ' . $section . '');
                                                $sec = mysqli_fetch_object($sec_query);

                                                echo $sec->title . '<br>';
                                            }
                                            ?>

                                        </td>
                                        <td>
                                            <form action="" method="POST" class="d-inline"><input type="hidden" name="classdelete" value=<?= $class->id ?>><button type="submit" class="btn btn-primary" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button></form>
                                        </td>


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
    <?php
    if (isset($_REQUEST['delete'])) {
        $delete = "DELETE FROM classes WHERE id = {$_REQUEST['classdelete']}";
        if ($db_conn->query($delete) == TRUE) {
            // echo 'Record Deleted Successfully';
            // below code will refresh the page after deleting the record 
            echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
        } else {

            echo 'Unable to Delete Data';
        }
    }
    ?>
</section>
<!-- /.content -->

<?php include('footer.php') ?>
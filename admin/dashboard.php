<?php include('../includes/config.php') ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>

<?php
$course_query = "SELECT * FROM courses";
$course_result = $db_conn->query($course_query);
$totalcourse = $course_result->num_rows;

$student_query = "SELECT * FROM users";
$student_result = $db_conn->query($student_query);
$totalstudent = $student_result->num_rows;

$courseorder_query = "SELECT * FROM courseorder";
$courseorder_result = $db_conn->query($courseorder_query);
$totalcourseorder = $courseorder_result->num_rows;

$feedback_query = "SELECT * FROM feedback";
$feedback_result = $db_conn->query($feedback_query);
$totalfeedback = $feedback_result->num_rows;

$teacher_query = "SELECT * FROM accounts WHERE  `type`='teacher'";
$teacher_result = $db_conn->query($teacher_query);
$totalteacher = $teacher_result->num_rows;

$classes_query = "SELECT * FROM classes";
$classes_result = $db_conn->query($classes_query);
$totalclasses = $classes_result->num_rows;

?>


<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-">Dashboard </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Dashboard </li>
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
        <div class="row py-3 pl-5">

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box ">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-graduation-cap"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><a href="./studentdetail.php">Total Students</a></span>
                        <span class="info-box-number">
                            <?= $totalstudent ?>


                        </span>

                    </div>
                    <!-- /.info-box-content -->

                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3 ">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><a href="./user-account.php?user=teacher">Total Teachers</a></span>
                        <span class="info-box-number"><?= $totalteacher ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-book-open"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><a href="./courses.php">Total Courses</a></span>
                        <span class="info-box-number"><?= $totalcourse ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

        </div>
        <div class="row py-3 pl-5">

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-book"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><a href="./classes.php">Total Classes</a></span>
                        <span class="info-box-number">
                            <?= $totalclasses ?>

                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-Success elevation-1"><i class="fas fa-user-graduate"></i></span>

                    <div class=" info-box-content">
                        <span class="info-box-text"><a href="./coursebuyers.php">Course Buyers</a></span>
                        <span class="info-box-number"><?= $totalcourseorder ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-question-circle"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><a href="./studentfeedback.php">User Feedback</a></span>
                        <span class="info-box-number"><?= $totalfeedback ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->




    </div>
    <!--/. container-fluid -->
</section>
<!-- /.content -->

<?php include('footer.php') ?>
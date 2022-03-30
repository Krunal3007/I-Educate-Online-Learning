<?php include('../includes/config.php') ?>
<?php include('./sidebar.php') ?>

<!-- include('../admin/header.php')  -->

<?php
$student_query = "SELECT * FROM users";
$student_result = $db_conn->query($student_query);
$totalstudent = $student_result->num_rows;

$teacher_query = "SELECT * FROM accounts WHERE  `type`='teacher'";
$teacher_result = $db_conn->query($teacher_query);
$totalteacher = $teacher_result->num_rows;

$course_query = "SELECT * FROM courses";
$course_result = $db_conn->query($course_query);
$totalcourse = $course_result->num_rows;
?>

<!DOCTYPE html>
<html lang="en">



<body>


    <div class="content-wrapper mt-0">
        <div class="row text-primary pl-4 pt-3"> <?php echo "<h2>Welcome " . $_SESSION['username'] . "</h2>";  ?> </div>


        <div class="row pl-5 pt-5">
            <div class="col-12 col-sm-6 col-md-3 ">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-book-open"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><a href="./allcourses.php">Total Courses</a></span>
                        <span class="info-box-number"><?= $totalcourse ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3 ">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Teachers</span>
                        <span class="info-box-number"><?= $totalteacher ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <div class="col-12 col-sm-6 col-md-3 ">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-graduation-cap"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">New Admissions</span>
                        <span class="info-box-number">
                            <?= $totalstudent ?>

                        </span>
                    </div>

                </div>
                <!-- /.info-box -->
            </div>
        </div>

        <div class="row pl-5 pt-5">
            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3 ">

            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3 ">
                <!-- <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-question-circle"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">New Inquiries</span>
                        <span class="info-box-number">10</span>
                    </div>
                  
                </div> -->
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3 ">
                <!-- <div class="info-box mb-3">
                    <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-user-graduate"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">New Admissions</span>
                        <span class="info-box-number">500</span>
                    </div>
                  
                </div> -->
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <?php include('../admin/footer.php') ?>
    </div>











</body>

</html>

<!-- new navbar  -->












<!-- new  -->
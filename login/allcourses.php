<?php include('../includes/config.php') ?>
<!-- include('../admin/header.php')  -->
<?php include('./sidebar.php') ?>



<!DOCTYPE html>
<html lang="en">



<?php
// if (isset($_GET['id'])) {
//     $course_id = $_GET['id'];
//     $_SESSION['id'] = $course_id;
//     $sql = "SELECT * FROM courses WHERE id = '$course_id'";
//     $result = $db_conn->query($sql);
//     $row = $result->fetch_assoc();
// }

$student_email = $_SESSION['email'];

?>




<body>





    <div class="content-wrapper mt-0">
        <div class="px-3 py-2">
            <h1 class="text-primary">All Courses</h1>

        </div>
        <div class="container-fluid py-3">
        </div>

        <!-- new  -->
        <style>
            .course-image {
                width: 100%;
                height: 170px !important;
                object-fit: cover;
                object-position: center;
            }
        </style>

        <!-- "SELECT * FROM courses WHERE courses.id NOT IN (SELECT course_id FROM courseorder)  " -->
        <div class="container">
            <div class="row ">

                <?php
                $query = mysqli_query($db_conn, "SELECT * FROM courses ORDER BY id DESC");
                while ($course = mysqli_fetch_object($query)) {
                    $course_iid = $course->id;
                ?>
                    <div class="col-lg-3 mb-4">
                        <div class="card">
                            <div>
                                <img src="../dist/uploads/<?php echo $course->image ?>" alt="image" class="img-fluid rounded-top course-image">
                            </div>
                            <div class="card-body">
                                <form action="./checkout.php" method="POST">
                                    <b><?php echo $course->name ?></b>
                                    <p class="card-text">
                                        <b>Duration: </b> <?php echo $course->duration ?> <br>

                                        <b>Price: </b> <?php echo $course->price ?>/- Rs
                                    </p>

                                    <input type="hidden" name="courseid" value=<?php echo $course->id ?>>
                                    <input type="hidden" name="courseprice" value=<?php echo $course->price ?>>
                                    <?php
                                    $enroll_query = "SELECT course_id FROM courseorder WHERE stu_email ='" . $_SESSION['email'] . "' AND course_id = '" . $course_iid . "'";
                                    $enroll = $db_conn->query($enroll_query);


                                    if ($enroll->num_rows > 0) { ?>

                                        <a href="./mycourses.php" class="btn btn-block btn-success btn-sm">Enrolled</a>

                                    <?php } else { ?>

                                        <button type="submit" class="btn btn-block btn-primary btn-sm">Enroll Now</button>

                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                    </div>

                <?php } ?>

            </div>

        </div>
        <?php include('../admin/footer.php') ?>
    </div>







</body>


</html>

<!-- new navbar  -->












<!-- new  -->
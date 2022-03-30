<?php include('../includes/config.php') ?>
<!-- include('../admin/header.php')  -->
<?php include('./sidebar.php') ?>



<!DOCTYPE html>
<html lang="en">








<body>





    <div class="content-wrapper mt-0">
        <div class="px-3 py-2">
            <h1 class="text-primary">Your Courses</h1>
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




        <div class="container">
            <div class="row">

                <?php




                $mycourse_query = "SELECT co.order_id,c.id,c.name,c.duration,c.image,c.price FROM courseorder AS co JOIN courses AS c ON c.id = co.course_id WHERE co.stu_email = '" . $_SESSION['email'] . "'";
                $mycourse_result = mysqli_query($db_conn, $mycourse_query);
                if (mysqli_num_rows($mycourse_result) > 0) {
                    while ($mycourse = mysqli_fetch_object($mycourse_result)) {
                ?>

                        <div class="col-lg-3 mb-4">
                            <div class="card">
                                <div>
                                    <img src="../dist/uploads/<?php echo $mycourse->image ?>" alt="image" class="img-fluid rounded-top course-image">
                                </div>
                                <div class="card-body">

                                    <b><?php echo $mycourse->name ?></b>
                                    <p class="card-text">
                                        <b>Duration: </b> <?php echo $mycourse->duration ?> <br>

                                        <b>Price: </b> <?php echo $mycourse->price ?>/- Rs <br>
                                        <b>Order Id: </b> <?php echo $mycourse->order_id ?>
                                    </p>



                                    <button type="#" class="btn btn-block btn-success btn-sm">Enrolled </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                <?php }
                } else {
                    echo '<div><h4 class="text-success">Nothing To Show<br>Buy Courses From "All Courses" Section</h4></div>';
                }
                ?>




            </div>

        </div>
        <?php include('../admin/footer.php') ?>
    </div>







</body>


</html>

<!-- new navbar  -->












<!-- new  -->
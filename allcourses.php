<?php include('./includes/config.php') ?>
<?php include('header.php') ?>

<style>
    .course-image {
        width: 100%;
        height: 170px !important;
        object-fit: cover;
        object-position: center;
    }
</style>


<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark  primary-color fixed-top ">
    <a class="navbar-brand" href="#"><b>SMS</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="./index.php">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#aboutus">About US</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#courses">Courses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#teacher">Out Teachers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#reviews">Reviews</a>
            </li>
            <li class="nav-item">

                <?php if (isset($_SESSION['username'])) { ?>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Logged In
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="./login/welcome.php">Courses</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>


        <?php } else { ?>

            <a class="nav-link" href="./login/index.php">Login/Sign-up</a>

        <?php } ?>

        </li>

        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">

            <li class="nav-item dropdown">

                <?php if (isset($_SESSION['login'])) { ?>
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user mr-2"></i>Admin Account
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="./admin/dashboard.php">Dashboard</a>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>

                <?php } else { ?>

                    <a href="login.php" class="nav-link"><i class="fa fa-user mr-2"></i>Admin Login</a>
                <?php } ?>

            </li>
        </ul>
    </div>
</nav>
<!--/.Navbar -->

<!-- Our Courses -->
<section class="py-5  bg-light" id="courses">
    <div class="text-center mb-5">
        <h2 class="font-weight-bold pt-4">Our Courses</h2>
        <!-- <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet ipsum recusandae nulla eius cum! Porro.</p> -->
    </div>

    <div class="container">
        <div class="row">

            <?php
            $query = mysqli_query($db_conn, "SELECT * FROM courses ORDER BY id DESC ");
            while ($course = mysqli_fetch_object($query)) {
            ?>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div>
                            <img src="./dist/uploads/<?php echo $course->image ?>" alt="image" class="img-fluid rounded-top course-image">
                        </div>
                        <div class="card-body">
                            <b><?php echo $course->name ?></b>
                            <p class="card-text">
                                <b>Duration: </b> <?php echo $course->duration ?> <br>
                                <b>Price: </b> <?php echo $course->price ?>/- Rs
                            </p>
                            <a href="./login/index.php" class="btn btn-block btn-primary btn-sm">Enroll Now</a>
                        </div>
                    </div>
                </div>

            <?php } ?>


        </div>
    </div>
</section>


<!-- Footer  -->
<footer style="background: url(./assets/images/our_courses.jpg) center/cover no-repeat">
    <div class="py-5 text-white" style="background: #000000bb">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <h5>Useful Links</h5>

                    <ul class="fa-ul ml-4">
                        <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>List icons</a></li>
                        <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>can be used</a></li>
                        <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>as bullets</a></li>
                        <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>in lists</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5>Social Presence</h5>
                    <div>
                        <span class="fa-stack ">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x fa-inverse text-dark"></i>
                        </span>
                        <span class="fa-stack ">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fab fa-instagram fa-stack-1x fa-inverse text-dark"></i>
                        </span>
                        <span class="fa-stack ">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x fa-inverse text-dark"></i>
                        </span>
                        <span class="fa-stack ">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fab fa-linkedin fa-stack-1x fa-inverse text-dark"></i>
                        </span>
                        <span class="fa-stack ">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fab fa-youtube fa-stack-1x fa-inverse text-dark"></i>
                        </span>
                    </div>

                </div>
                <div class="col-lg-3">
                    <h5>Subscribe Now</h5>
                    <form action="">
                        <!-- Material input -->
                        <div class="form-group">
                            <input type="email" id="email-s" class="form-control" placeholder="Your Email">

                        </div>
                        <button class="btn btn-primary btn-sm btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>

<section class="py-2 bg-dark text-light">
    <div class="container-fluid">
        Copyright 2021 All Rights Reserved. <a href="#" class="text-light">School Management System</a>
    </div>
</section>




<?php include('footer.php')  ?>
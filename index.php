<?php include('./includes/config.php') ?>
<?php include('header.php') ?>



<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark  primary-color fixed-top ">
    <a class="navbar-brand" href="#"><b>I-Educate</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="#home">Home
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
                    <!-- <a class="dropdown-item" href="#">Action</a> -->
                    <a class="dropdown-item" href="./login/welcome.php">My Profile</a>
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
                        <!-- <a class="dropdown-item" href="#">Action</a> -->
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

<div class="d-flex shadow py-4" style="height:550px;background:linear-gradient(-45deg, navy 20%,transparent 100%)" id="home">
    <div class="container-fluid my-auto">
        <div class="row">
            <div class="col-lg-6 my-auto">
                <h1 class="display-3 font-weight-bold">Admission Open For 2021-2022</h1>
                <p class="text-white">This is an Indian online tutoring platform where teachers provide tuitions to students over the internet, using a real-time virtual learning environment</p>
                <a href="./login/index.php" class="btn btn-lg btn-primary">Call TO Action</a>
            </div>
            <div class="col-lg-6 py-5">
                <div class="col-lg-7 mx-auto card shadow-lg">
                    <div class="card-body">
                        <h3>Inquiry Form</h3>
                        <form action="" method="post">


                            <div class="md-form">
                                <input type="text" id="form1" class="form-control">
                                <label for="form1">Your Name</label>
                            </div>

                            <div class="md-form">
                                <input type="email" id="email" class="form-control">
                                <label for="email">Your Email</label>
                            </div>

                            <div class="md-form">
                                <input type="text" id="mobile" class="form-control">
                                <label for="mobile">Your Mobile</label>
                            </div>

                            <div class="md-form mb-4 pink-textarea active-pink-textarea">
                                <textarea id="form18" class="md-textarea form-control" rows="3"></textarea>
                                <label for="form18">Your Query</label>
                            </div>

                            <button class="btn btn-block btn-primary">Submit Form</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About Us -->
<section class="py-5" id="aboutus" style="height:650px;background:linear-gradient(-45deg, gray 30%,transparent 50%)">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 py-5">
                <h2 class="font-weight-bold">About <br> I-Educate Online Learning</h2>
                <div class="pr-5">
                    <p>This is a large database system which can be used for managing your school's day to day business. School Management System allows users to store almost all of their school's information electronically, including information on students, properties, teaching meteorites etc. Most importantly, this information can be easily shared with authorized users, records can be easily searched, and reports can be easily generated.</p>
                    <p>
                        It is a software which is helpful for students as well as the school authorities. In the current system all the activities are done manually. It is very time consuming and costly.</p>
                </div>
                <a href="about-us.php" class="btn btn-primary">Know More</a>
            </div>
            <div class="col-lg-6">
                <img src="./assets/images/our_courses.jpg" alt="About" class=" py-5" style="height:570px;width:570px">
            </div>
        </div>
    </div>
</section>

<!-- About Us  -->
<section class="py-5" id="aboutus" style="height:650px;background:linear-gradient(45deg, gray 30%,transparent 50%)">
    <div class="container">
        <div class="row">

            <div class="col-lg-6">
                <img src="./assets/images/our_courses1.jpg" alt="About" class=" py-5" style="height:570px;width:570px">
            </div>
            <div class="col-lg-6 py-5 pl-5">
                <h2 class="font-weight-bold ">Know <br> More About It</h2>
                <div class="">
                    <p>Now these days computer play very important role in any formal organization, because computer works faster and accurate than human. The purpose of developing the SMS system of any organization is that to make easy to management to store a large number of data/reports into the computer. It is difficult for any management to store the large number of data manually or in papers. In that case when any user wants to take information it is very difficult for management to provide information immediately.</p>
                    <p>
                        It is very time consuming process. But by using computer it takes only few minutes/seconds. This software is basically for the use of administrator of management of this institute they will use it for storing the records and retrieve the information for the users. It is new computerized project of this institute, before this they works manually.</p>
                </div>
                <a href="about-us.php" class="btn btn-primary">Know More</a>
            </div>
        </div>
    </div>
</section>


<style>
    .course-image {
        width: 100%;
        height: 170px !important;
        object-fit: cover;
        object-position: center;
    }
</style>

<!-- Our Courses -->
<section class="py-5  bg-light" id="courses">
    <div class="text-center mb-5">
        <h2 class="font-weight-bold pt-4">Our Courses</h2>
        <!-- <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet ipsum recusandae nulla eius cum! Porro.</p> -->
    </div>

    <div class="container">
        <div class="row">

            <?php
            $query = mysqli_query($db_conn, "SELECT * FROM courses ORDER BY id DESC LIMIT 0,8");
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
            <div class="mx-auto border-rounded"><a href="./allcourses.php" class="btn btn-primary btn-sm">View All</a></div>

        </div>
    </div>
</section>

<!-- Teachers -->
<section class="py-5 " id="teacher" style="background: #103ef726;">
    <div class="text-center mb-5">
        <h2 class="font-weight-bold pt-4">Our Teachers</h2>
        <!-- <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet ipsum recusandae nulla eius cum! Porro.</p> -->
    </div>

    <div class="container">
        <div class="row slider-teacher">
            <?php
            $teacher_query = 'SELECT * FROM accounts  WHERE `type`="teacher" ORDER BY id DESC';
            $teacher_result = mysqli_query($db_conn, $teacher_query);
            while ($teacher = mysqli_fetch_object($teacher_result)) { ?>
                <div class="col-lg-4 my-5">
                    <div class="card">
                        <div class="col-5 position-absolute" style="top:-50px"><img src="./assets/images/person.png" alt="" class="mw-100 border rounded-circle"></div>
                        <div class="card-body pt-5 mt-4">
                            <h5 class="card-title "> Name: <?= $teacher->name ?></h5>
                            <p class="card-text">
                                <b>Email: <?= $teacher->email ?></b><br>
                                <b>Courses: </b> 5 <br>
                                <b>Ratings: </b> <i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i>
                            </p>
                        </div>
                    </div>
                </div>
            <?php  }  ?>
        </div>
    </div>
</section>

<!-- Achievements -->
<section class="py-5 text-white" style="background:navy">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-5">
                    <h2>Achievements</h2>
                    <p>This study analyzes the relationship between school management strategies and student's academic achievement, while controlling for factors such as the school principals' age, gender, experience, as well as school size and location, Student's Social Economics Status (SES), English as a Second Language learner's population (ESL), Special Education student population and the prior year's academic achievement data.</p>

                    <img src="./assets/images/our_courses.jpg" alt="" class="img-fluid rounded">
                </div>
                <div class="col-lg-6 py-4 mt-5">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="border rounded ">
                                <div class="card-body text-center">
                                    <span><i class="text-warning fas fa-graduation-cap fa-2x"></i></span>
                                    <h1 class="my-2 font-weight-bold">100</h1>
                                    <hr class="border-warning">
                                    <h4>Graduates</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="border rounded ">
                                <div class="card-body text-center">
                                    <span><i class="text-warning fas fa-graduation-cap fa-2x"></i></span>
                                    <h1 class="my-2 font-weight-bold">100</h1>
                                    <hr class="border-warning">
                                    <h4>Graduates</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="border rounded ">
                                <div class="card-body text-center">
                                    <span><i class="text-warning fas fa-graduation-cap fa-2x"></i></span>
                                    <h1 class="my-2 font-weight-bold">100</h1>
                                    <hr class="border-warning">
                                    <h4>Graduates</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="border rounded ">
                                <div class="card-body text-center">
                                    <span><i class="text-warning fas fa-graduation-cap fa-2x"></i></span>
                                    <h1 class="my-2 font-weight-bold">100</h1>
                                    <hr class="border-warning">
                                    <h4>Graduates</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials  -->
<section class="py-5" id="reviews" style="background: #103ef726;">
    <div class="text-center mb-5">
        <h2 class="font-weight-bold pt-4">What People Says</h2>
        <!-- <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet ipsum recusandae nulla eius cum! Porro.</p> -->
    </div>
    <div class="container">


        <div class="row slider-feedback">
            <?php


            $feedback_query = 'SELECT * FROM feedback ORDER BY id DESC';
            $feedback_result = mysqli_query($db_conn, $feedback_query);
            while ($feedback = mysqli_fetch_object($feedback_result)) { ?>
                <div class="col-6">
                    <div class=" rounded position-relative" style="border: 1px solid black;">
                        <div class="p-4 text-center">


                            <p><?= $feedback->content ?></p>


                        </div>
                        <i class="fa fa-quote-left fa-3x position-absolute" style="top:.5rem; left:.5rem;opacity:.2"></i>
                    </div>
                    <div class="text-center mt-n2">
                        <img src="./assets/images/person.png" alt="" class="rounded-circle border mx-auto" width="100" height="100">
                        <h6 class="mb-0 font-weight-bold">Name Of Candidate: <?= $feedback->name ?></h6>
                        <p><i>Email: <?= $feedback->email ?></i></p>
                    </div>
                </div>
            <?php } ?>
            <!-- <div class="col-6">
            <div class="border rounded position-relative">
                <div class="p-4 text-center">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam itaque iusto assumenda illum, iure modi voluptate vero, est sit tempore non voluptatibus earum possimus! Ut veniam harum quia dolor sequi nemo exercitationem ab iste.
                </div>
                <i class="fa fa-quote-left fa-3x position-absolute" style="top:.5rem; left:.5rem;opacity:.2"></i>
            </div>
            <div class="text-center mt-n2">
                <img src="./assets/images/person.png" alt="" class="rounded-circle border" width="100" height="100">
                <h6 class="mb-0 font-weight-bold">Name Of Candidate</h6>
                <p><i>Designation</i></p>
            </div>
        </div> -->
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
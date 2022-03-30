<?php include('header.php') ?>


<head>
    <!-- this link is for admin login form  -->
    <link rel="stylesheet" type="text/css" href="./login/style.css">
</head>




<section class="bg-light  d-flex" style="background: url(./login/bg.jpg) center/cover no-repeat">
    <!-- <div class="col-3 m-auto">
        <div class="card">
            <div class="card-body">
                <div class="border rounded-circle mx-auto d-flex" style="width:100px;height:100px"><i class="fa fa-user text-light fa-3x m-auto"></i></div> -->


    <div class="container">
        <form action="./actions/login.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">

                <button name="login" class="btn">Login</button>

            </div>

        </form>
    </div>


    <!-- <form action="./actions/login.php" method="POST">
                    
                    <div class="md-form">
                        <input type="email" id="email" name="email" class="form-control">
                        <label for="email">Your Email</label>
                    </div>
                 
                    <div class="md-form">
                        <input type="password" id="password" name="password" class="form-control">
                        <label for="password">Your Password</label>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary" name="login">Login</button>
                    </div>
                </form> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
</section>

<?php include('footer.php') ?>
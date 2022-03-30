<?php include('../includes/config.php') ?>
<!-- include('../admin/header.php')  -->
<?php include('./sidebar.php') ?>

<?php
$error = '';
if (isset($_POST['submit'])) {
    $name = $_SESSION['username'];
    $email = $_SESSION['email'];
    $content = $_POST['content'];


    $check_query = mysqli_query($db_conn, "SELECT * FROM feedback WHERE email = '$email'");
    if (mysqli_num_rows($check_query) > 0) {
        $error = 'Email already exists';
    } else {


        mysqli_query($db_conn, "INSERT INTO feedback  (`name`,`email`,`content`) VALUES ('$name','$email','$content')  ") or die('DB Error');

        $_SESSION['success_msg'] = 'Feedback Submitted Successfully';
    }
}
?>


<!DOCTYPE html>
<html lang="en">




<body>





    <div class="content-wrapper mt-0">
        <div class="px-3 py-2">
            <h1 class="text-primary">Feedback Form</h1>

            <?php
            if (isset($_SESSION['success_msg'])) { ?>
                <div class="col-12">
                    <small class="text-success" style="font-size: 20px"><?= $_SESSION['success_msg'] ?></small>
                </div>
            <?php
                unset($_SESSION['success_msg']);
            } ?>
        </div>

        <div class="container-fluid py-3">
        </div>


        <!-- new  -->
        <div class="card">

            <div class="card-body">

                <div class="table-responsive">



                    <form action="" method="POST">
                        <!-- <div class="form-group">
                            <label for="name">User Name</label>
                            <input type="text" name="name" placeholder="Name" required class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="email"> Email</label>
                            <input type="email" name="email" placeholder="Email" required class="form-control">
                            ?php echo $error ?>
                        </div> -->
                        <label for="form18">
                            <h4 class="text-primary">Write Feedback:</h4>
                        </label>
                        <div class="md-form mb-4 pink-textarea active-pink-textarea">
                            <textarea id="form18" name="content" class="md-textarea form-control" rows="3"></textarea>

                        </div>





                        <button name="submit" class="btn btn-primary">Submit</button>
                    </form>










                </div>
            </div>
        </div>

    </div>


    <?php include('../admin/footer.php') ?>








</body>


</html>

<!-- new navbar  -->












<!-- new  -->
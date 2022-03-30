<?php include('../includes/config.php') ?>
<!-- include('../admin/header.php')  -->

<!-- ?php include('./sidebar.php') ? -->
<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
}

?>

<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

$stuemail = $_SESSION['email'];



?>







<?php

$co_id = $_POST['courseid'];

mysqli_query($db_conn, "INSERT INTO courseid_table (Course_id,stu_email) VALUES ('$co_id','$stuemail')") or die('DB Error');

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="GENERATOR" content="Evrsoft First Page">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">






</head>




<body>


    <!-- <div class="content-wrapper mt-0">
        <div class="container-fluid py-3">
        </div>

        <div class="card">

            <div class="card-body"> -->

    <!-- ?php





                $checkout_query = 'SELECT * FROM users WHERE `username` = "' . $_SESSION['username'] . '"';
                $checkout_result = mysqli_query($db_conn, $checkout_query);
                while ($checkout = mysqli_fetch_object($checkout_result)) {  ? -->



    <div class="container  mt-5">
        <div class="row">
            <!-- jumbotron -->
            <div class="col-sm-6 offset-sm-3 jumbotron ">
                <h3 class="mb-5">
                    Welcome to Payment Page

                </h3>
                <form method="POST" action="./PaytmKit/pgRedirect.php">
                    <div class="form-group row">
                        <label for="ORDER_ID" class="col-sm-4 col-form-label">Order Id</label>
                        <div class="col-sm-8">
                            <input id="ORDER_ID" class="form-control" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000, 99999999) ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="CUST_ID" class="col-sm-4 col-form-label">Student Email</label>
                        <div class="col-sm-8">
                            <input id="CUST_ID" class="form-control" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php if (isset($stuemail)) {
                                                                                                                                                        echo $stuemail;
                                                                                                                                                    } ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="TXN_AMOUNT" class="col-sm-4 col-form-label">Amount</label>
                        <div class="col-sm-8">
                            <input title="TXN_AMOUNT" class="form-control" tabindex="10" type="text" name="TXN_AMOUNT" value="<?php echo $_POST['courseprice']; ?>">
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                                        <label for="Course_Id" class="col-sm-4 col-form-label">Course Id</label>
                                        <div class="col-sm-8">
                                            <input title="Course_Id" class="form-control" tabindex="10" type="text" name="Course_Id" value="?php echo $_POST['courseid']; ?>">
                                        </div>
                                    </div> -->


                    <div class="form-group row">
                        <!-- <label for="INDUSTRY_TYPE_ID" class="col-sm-4 col-form-label">INDUSTRY_TYPE_ID</label> -->
                        <div class="col-sm-8">
                            <input type="hidden" id="INDUSTRY_TYPE_ID" class="form-control" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
                        </div>
                    </div>
                    <div class="form-group row">
                        <!-- <label for="CHANNEL_ID" class="col-sm-4 col-form-label">CHANNEL_ID</label> -->
                        <div class="col-sm-8">
                            <input type="hidden" id="CHANNEL_ID" class="form-control" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
                        </div>
                    </div>
                    <div class="text-center">
                        <input value="Checkout" type="submit" name="coid" class="btn btn-primary" onclick="">
                        <a href="./allcourses.php" class="btn btn-primary">Cancel</a>
                    </div>
                </form>
                <small class="form-text text-muted">Note: Complete Payment by Clicking Checkout Button</small>
            </div>
        </div>
    </div>

    <!-- ?php }       ? -->










    <!-- </div>
        </div>

    </div> -->

    </div>
    <!-- ?php include('../admin/footer.php') ? -->
    </div>







</body>


</html>

<!-- new navbar  -->












<!-- new  -->
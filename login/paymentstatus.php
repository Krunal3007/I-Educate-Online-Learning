<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");



// following files need to be included
require_once("./PaytmKit/lib/config_paytm.php");
require_once("./PaytmKit/lib/encdec_paytm.php");
?>


<?php include('../includes/config.php') ?>
<!-- include('../admin/header.php')  -->
<?php include('./sidebar.php') ?>



<!DOCTYPE html>
<html lang="en">








<body>





    <div class="content-wrapper mt-0">
        <div class="px-3 py-2">
            <!-- <h1 class="text-primary">Your Courses</h1> -->
        </div>
        <div class="container-fluid py-3">
        </div>

        <!-- new  -->





        <div class="container">
            <div class="row">

                <?php


                $ORDER_ID = "";
                $requestParamList = array();
                $responseParamList = array();

                if (isset($_POST["ORDER_ID"]) && $_POST["ORDER_ID"] != "") {

                    // In Test Page, we are taking parameters from POST request. In actual implementation these can be collected from session or DB. 
                    $ORDER_ID = $_POST["ORDER_ID"];

                    // Create an array having all required parameters for status query.
                    $requestParamList = array("MID" => PAYTM_MERCHANT_MID, "ORDERID" => $ORDER_ID);

                    $StatusCheckSum = getChecksumFromArray($requestParamList, PAYTM_MERCHANT_KEY);

                    $requestParamList['CHECKSUMHASH'] = $StatusCheckSum;

                    // Call the PG's getTxnStatusNew() function for verifying the transaction status.
                    $responseParamList = getTxnStatusNew($requestParamList);
                }

                ?>


                <div class="content-wrapper mt-0 ml-0 mx-auto" style="width: 700px;">
                    <div class="px-3 py-2">
                        <!-- <h1 class="text-primary">Details</h1> -->
                    </div>
                    <!-- <div class="container-fluid py-3">
    </div> -->

                    <!-- new  -->
                    <div class="card ">

                        <div class="card-body ">

                            <h2>Payment Status</h2>
                            <form method="post" action="">
                                <div class="form-group row ">
                                    <label class="pl-2 ">
                                        <h4>Order ID:</h4>
                                    </label>
                                    <div><input class="form-control mx-3" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo $ORDER_ID ?>">
                                    </div>
                                    <div>
                                        <input class="btn btn-primary mx-4" value="View" type="submit">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <?php
                        if (isset($responseParamList) && count($responseParamList) > 0) {

                        ?>
                            <div class="container">
                                <div class=" justify-content-center">
                                    <div class="col-auto">
                                        <h2 class="">Payment Receipt</h2>

                                        <table class="table table-bordered">
                                            <tbody>
                                                <?php
                                                foreach ($responseParamList as $paramName => $paramValue) {
                                                ?>
                                                    <tr>
                                                        <td><label><?php echo $paramName ?></label></td>
                                                        <td><?php echo $paramValue ?></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                                <tr>
                                                    <td><button type="button" class="btn btn-primary" onclick="javascript:window.print();">Print</button></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>



                        <?php
                        }
                        ?>
                    </div>






                </div>
            </div>
            <?php include('../admin/footer.php') ?>
        </div>



    </div>

    </div>

    </div>







</body>


</html>

<!-- new navbar  -->












<!-- new  -->
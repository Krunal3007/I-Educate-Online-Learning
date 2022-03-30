<?php
include('../includes/config.php');
include('header.php');
include('sidebar.php');
?>

<div class="card">
    <div class="card-body">
        <div class="col-sm-9 mt-5">
            <form action="" method="POST" class="d-print-none">
                <div class="form-row">
                    <div class="form-group col-md-2">

                        <input type="date" class="form-control" id="startdate" name="startdate">
                    </div> <span> To </span>
                    <div class="form-group col-md-2">

                        <input type="date" class="form-control" id="enddate" name="enddate">
                    </div>
                    <div class="form-group"><input type="submit" class="btn btn-primary" name="searchsubmit" value="Search">
                    </div>
                </div>
            </form>
            <?php
            if (isset($_REQUEST['searchsubmit'])) {
                $startdate = $_REQUEST['startdate'];
                $enddate = $_REQUEST['enddate'];

                $sql = "SELECT * FROM courseorder WHERE order_date BETWEEN '$startdate' AND '$enddate'";
                $result = $db_conn->query($sql);
                if ($result->num_rows > 0) {
                    echo '<p class="bg-primary text-white p-2 mt-4">Details</p>
            <table class="table table-bordered">
            <thead>
            <tr>
            <th scope="col">Order Id</th>
            <th scope="col">Course Id</th>
            <th scope="col">Student Email</th>
            <th scope="col">Payment Status</th>
            <th scope="col">Order Date</th>
            <th scope="col">Amount</th>
            </tr>
            </thead>
            
            <tbody>';
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>
                <th scope="row">' . $row["order_id"] . '</th>
                <td>' . $row["course_id"] . '</td>
                <td>' . $row["stu_email"] . '</td>
                <td>' . $row["status"] . '</td>
                <td>' . $row["order_date"] . '</td>
                <td>' . $row["amount"] . '</td>
                </tr>';
                    }
                    echo '<tr>
            
            </tr></tbody>
            </table>
            <td><form class="d-print-none"><input class="btn btn-primary" type="submit" value="Print" onClick="window.print()"></form></td>';
                } else {
                    echo "<div class='alert alert-warning col-sm-6 ml-5 mt-2' role='alert'> No Records Found !</div>";
                }
            }
            ?>
        </div>
    </div>

</div>
</div>
</div>
<?php include('footer.php'); ?>
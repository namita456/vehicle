<!DOCTYPE html>
<html lang="en">
<?php
require_once("auth.php");

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserPannel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        .mtb {
            margin: 9.5%;
        }

        .card:hover {
            box-shadow: 8px 8px 5px #888;
            transform: scale(1);
        }

        .card {
            background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
        }
    </style>
</head>

<body class="bg-light">

    <div>
        <?php include 'userheader.php'; ?>
        <div class="container-fluid mtb ">
            <div class="row ">
                <div class="col-sm-4 ">
                    <div class="card border-primary ">
                        <div class="card-body">
                            <h5 class="card-title">User Complaint </h5>

                            <a href="complaint_reg.php" class="btn btn-primary border border-danger">Register Complaint</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card border-primary">
                        <div class="card-body">
                            <h5 class="card-title">Complaint Status</h5>

                            <a href="showcomplaint.php" class="btn btn-primary border border-danger">Show Status</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card border-primary ">
                        <div class="card-body">
                            <h5 class="card-title">Vehicle Registration</h5>

                            <a href="vehiclereg.php" class="btn btn-primary border border-danger">Vehicle Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card border-primary mt-3">
                        <div class="card-body">
                            <h5 class="card-title">Manage User Details</h5>

                            <a href="userupdate.php" class="btn btn-primary border border-danger">Click Here</a>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card border-primary mt-3">
                        <div class="card-body">
                            <h5 class="card-title"> Vehicle Details</h5>

                            <a href="vehiclestatus.php" class="btn btn-primary border border-danger">Detail</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
    <?php include 'footer.php'; ?>

</body>

</html>
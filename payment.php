<?php  //
session_start();
include("connection.php");
include("function.php");

#$user_data=check_login($connect);
//

$medicine_data = "SELECT `medicine_name`,`dosage(mg/ml)`,`quantity` FROM `medicine1`";
$medicine_dose = "SELECT `dosage(mg/ml)` FROM `medicine1`";
$query = mysqli_query($connect, $medicine_data);
$query1 = mysqli_query($connect, $medicine_dose);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- My CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="dash.css">

    <title>AdminHub</title>
</head>

<body>


    <!-- SIDEBAR -->
    <section id="navbar">
        <div class="logo">
            <img src="transparent-admin-icon-avatar-icon-human-icon-5d645ce97094b3.2235955315668584734611.png" alt="" style="height: 100px;
          width: 100px;">
        </div>
        <div class="text">
            Pharma Mart</div>
        <nav class="nav">
            <ul>
                <li> <a href="dash.php">Dashboard</a></li>

                <li><a href="employee.php">Employee</a></li>
                <li> <a href="medicine.php">Medicine</a></li>
                <li> <a href="company.php">Company info</a></li>
                <li> <a href="invoice.php">Invoice</a></li>
                <li> <a href="MIreport.php">Monthly Income Report</a></li>
                <li><a href="customer.php">Customer </a></li>
                <li><a href="payment.php">Payment Info</a></li>

            </ul>
        </nav>
    </section>

    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>

            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>


            <div class="profile">
                <p>Hello,</p><a href="login.php"><button>log out </button></a>
            </div>

        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->

        <div class="row mx-auto">
            <div class="col-6">
                <form action="payment_insert.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Medicine Name</label>
                        <select name="name" id="">
                            <option value="">-- Select Medicine --</option>
                            <?php
                            while ($name = mysqli_fetch_array($query)) {
                            ?>
                                <option value="<?php
                                                echo $name['medicine_name'];
                                                ?>">
                                    <?php
                                    echo $name['medicine_name'];
                                    ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Dose</label>
                        <select name="dose" id="">
                            <option value="">-- Select Dose --</option>
                            <?php
                            while ($dose = mysqli_fetch_array($query1)) {
                            ?>
                                <option value="<?php
                                                echo $dose['dosage(mg/ml)'];
                                                ?>">
                                    <?php
                                    echo $dose['dosage(mg/ml)'];
                                    ?>
                                </option>
                            <?php
                            }
                            ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Quantity</label>
                        <input name="quantity" type="number" class="form-control" placeholder="Quantity">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="bootstrap.min.js"></script>
</body>

</html>
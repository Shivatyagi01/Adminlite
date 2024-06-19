<?php
session_start();
include 'backend/conn.php';

$userId = $_SESSION['ID'];
$query = "SELECT * FROM Customers WHERE id = $userId";
$result = mysqli_query($con, $query);
$userData = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Edit User Details Page</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="dist/css/adminlte.min2167.css?v=3.2.0">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <?php include_once 'header.php'; ?>
        <?php include_once 'sidebar.php'; ?>

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Edit User Details</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Edit User Details</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="container-fluid">
                    <div class="card card-primary">
                        <form action="backend/editCustomer.php" method="POST">
                            <div class="card-body">
                                <?php
                                if (isset($_SESSION['error'])) {
                                    echo "<p style='color: red;'>{$_SESSION['error']}</p>";
                                    unset($_SESSION['error']);
                                }
                                ?>
                                <div class="form-group">
                                    <label for="exampleInputName">Enter Name</label>
                                    <input type="text" name="name" class="form-control" value="<?php echo $userData['name']; ?>" id="exampleInputName" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone Number</label>
                                    <input type="text" name="phone" class="form-control" value="<?php echo $userData['phone']; ?>" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control" value="<?php echo $userData['email']; ?>" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Enter Address</label>
                                    <input type="text" name="address" class="form-control" value="<?php echo $userData['address']; ?>" id="exampleInputName1" placeholder="Enter Username">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Confirm Password</label>
                                    <input type="password" name="confirmpassword" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-danger">Block User</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright © 2014-2021 <a href="https://adminlte.io/">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
    </div>
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/adminlte.min2167.js?v=3.2.0"></script>
</body>

</html>
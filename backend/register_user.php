<?php
include_once('conn.php');

if (isset($_POST['submit'])) {
    $username = $con->real_escape_string($_POST['username']);
    $password = $con->real_escape_string(md5($_POST['password']));
    $email     = $con->real_escape_string($_POST['email']);
    $query  = "INSERT INTO Users (name,username,password,email) VALUES ('$username','$username','$password','$email')";
    if (mysqli_query($con, $query)) {
        header("location: ../login.php");
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
}

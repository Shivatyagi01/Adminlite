<?php
session_start();
include_once('conn.php');

if (isset($_POST['submit'])) {
    if (empty($_POST['name']) || empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])) {
        $_SESSION['error'] = "Please fill in all fields";
        header("Location: ../create-user.php");
        exit();
    }

    $password = $_POST['password'];
    if (strlen($password) < 8 || !preg_match("#[0-9]+#", $password) || !preg_match("#[a-zA-Z]+#", $password)) {
        $_SESSION['error'] = "Password should be at least 8 characters long and contain at least one letter and one number";
        header("Location: ../create-user.php");
        exit();
    }

    $name = $con->real_escape_string($_POST['name']);
    $username = $con->real_escape_string($_POST['username']);
    $email = $con->real_escape_string($_POST['email']);
    $role = $con->real_escape_string($_POST['role']);
    $password = $con->real_escape_string(md5($password));

    $query  = "INSERT INTO Users (name,username,password,email,role) VALUES ('$name','$username','$password','$email','$role')";
    if (mysqli_query($con, $query)) {
        $_SESSION['error'] = "User created Successfully";
        header("Location: ../create-user.php");
    } else {
        $_SESSION['error'] = "Invalid username or password";
        header("Location: ../create-user.php");
    }
}
?>

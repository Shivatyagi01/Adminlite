<?php
session_start();
include_once('conn.php');

if (isset($_POST['submit'])) {
    if (empty($_POST['name']) || empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'] || empty($_POST['confirmpassword']))) {
        $_SESSION['error'] = "Please fill in all fields";
        header("Location: ../edit-customer.php");
        exit();
    }

    $password = $_POST['password'];
    if (strlen($password) < 8 || !preg_match("#[0-9]+#", $password) || !preg_match("#[a-zA-Z]+#", $password)) {
        $_SESSION['error'] = "Password should be at least 8 characters long and contain at least one letter and one number";
        header("Location: ../edit-customer.php");
        exit();
    }
    // Check if passwords match
    if ($password !== $confirmpassword) {
        $_SESSION['error'] = "Passwords do not match";
        header("Location: ../edit-customer.php");
        exit();
    }
    $id = $_SESSION['id'];
    $name = $con->real_escape_string($_POST['name']);
    $username = $con->real_escape_string($_POST['username']);
    $email = $con->real_escape_string($_POST['email']);
    $role = $con->real_escape_string($_POST['role']);
    $password = $con->real_escape_string(md5($password));
    $confirmpassword = $con->real_escape_string(md5($confirmpassword));

    $query  = "UPDATE Users set(name,username,password,email,role) VALUES ('$name','$username','$password','$email','$role') where id='$id'";
    if (mysqli_query($con, $query)) {
        $_SESSION['error'] = "User created Successfully";
        header("Location: ../edit-customer.php");
    } else {
        $_SESSION['error'] = "Invalid username or password";
        header("Location: ../edit-customer.php");
    }
}

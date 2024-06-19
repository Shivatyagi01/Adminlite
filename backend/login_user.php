<?php
session_start();

if (isset($_SESSION['ID'])) {
    header("Location:../dashboard.php");
    exit();
}

include_once('conn.php');

if (isset($_POST['submit'])) {
    $username = $con->real_escape_string($_POST['username']);
    $password = $con->real_escape_string(md5($_POST['password']));

    if (!empty($username) && !empty($password)) {
        $query  = "SELECT * FROM Users WHERE username = '$username' OR email = '$username'";
        $result = $con->query($query);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($row['password'] == $password) {
                $_SESSION['ID'] = $row['id'];
                $_SESSION['ROLE'] = $row['role'];
                $_SESSION['NAME'] = $row['name'];
                header("Location:../dashboard.php");
                exit();
            } else {
                $_SESSION['error'] = "Invalid username or password";
            }
        } else {
            $_SESSION['error'] = "Invalid username or password";
        }
    } else {
        $_SESSION['error'] = "Username and Password are required";
    }
    header("Location:../login.php");
    exit();
}

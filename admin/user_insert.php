<?php

include('../db_con.php');



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $confirm  = $_POST['confirm-password'];


    if ($password !== $confirm) {
        echo "<script>alert('Passwords do not match!'); window.history.back();</script>";
        exit;
    }


    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);


    $sql = "INSERT INTO add_user (name, email, password) VALUES ('$name', '$email', '$hashedPassword')";

    if ($con->query($sql) === TRUE) {
        echo "<script>alert('Registration Successful!'); window.location='login.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

$con->close();
?>

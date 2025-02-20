<?php
if (isset($_POST['name'], $_POST['lname'], $_POST['phone'], $_POST['email'], $_POST['message'])) {

    $name = trim($_POST['name']);
    $lname = trim($_POST['lname']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);
    $added_date = date('Y-m-d H:i:s');

    if (empty($name) || empty($lname) || empty($phone) || empty($email) || empty($message)) {
        echo 'error';
        exit;
    }
    include('db_con.php');

    $sql = "INSERT INTO contact (name, lname, phone, email, message, added_date) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $con->prepare($sql);

  
    if ($stmt === false) {
        echo 'error: ' . $con->error;
        exit;
    }

    $stmt->bind_param("ssssss", $name, $lname, $phone, $email, $message, $added_date);

    if ($stmt->execute()) {
        echo 'success';
    } else {
        echo 'error: ' . $stmt->error;
    }

    $stmt->close();
    $con->close();
}
?>

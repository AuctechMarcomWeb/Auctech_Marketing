<?php
if (isset($_POST['name'], $_POST['phone'], $_POST['email'], ($_POST['service_type']), $_POST['message'])) {
   
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $service_type = trim($_POST['service_type']);
    $message = trim($_POST['message']);
    

    if (empty($name) || empty($phone) || empty($email) || empty($message)) {
        echo 'error'; 
        exit;
    }

    include('db_con.php');

   
    $sql = "INSERT INTO service_inquery (name, phone, email, service_type, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = $con->prepare($sql);


    if ($stmt === false) {
        echo 'error: ' . $con->error;
        exit;
    }

    $stmt->bind_param("sssss", $name, $phone, $email,  $service_type, $message);

    if ($stmt->execute()) {
        echo 'success';
    } else {
        echo 'error: ' . $stmt->error; 
    }

  
    $stmt->close();
    $con->close();
}
?>
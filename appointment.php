<?php
header('Content-Type: application/json');
include 'db_con.php'; 
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;

// Check required fields
if(!empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['date']) && !empty($_POST['time']) && !empty($_POST['service_type'])) {

    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $date = trim($_POST['date']);
    $time = DateTime::createFromFormat('H:i', trim($_POST['time']))->format('h:i A');
    $service_type = trim($_POST['service_type']);
    $message = trim($_POST['message']);
    $token = bin2hex(random_bytes(16));

    // Insert into DB
    $stmt = $con->prepare("INSERT INTO book_appointement (email, phone, date, time, service_type, message, token) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $email, $phone, $date, $time, $service_type, $message, $token);

    if($stmt->execute()){
        $base_url = "https://auctechmarketing.com";
        $user_link = "$base_url/view_appointment.php?token=$token";
        $admin_link = "$base_url/view_appointment.php?token=$token";

        // PHPMailer setup
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'development@auctech.in';
        $mail->Password = 'cmwz kmgi unwu hpqp'; // App password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->isHTML(true);

        // Send email to user
        try {
            $mail->setFrom('development@auctech.in','Auctech Team');
            $mail->addAddress($email);
            $mail->Subject = "Your Appointment Confirmation";
            $mail->Body = "Dear Customer,<br>Your appointment is booked.<br>
                           📅 Date: $date<br>⏰ Time: $time<br>🛠 Service: $service_type<br>
                           👉 <a href='$user_link'>View Appointment</a>";
            $mail->send();
        } catch(Exception $e){}

        // Send email to admin
        try {
            $mail->clearAddresses();
            $mail->addAddress('development@auctech.in');
            $mail->Subject = "New Appointment Received";
            $mail->Body = "Hello Admin,<br>A new appointment is booked.<br>
                           📧 Email: $email<br>📞 Phone: $phone<br>📅 Date: $date<br>⏰ Time: $time<br>🛠 Service: $service_type<br>
                           👉 <a href='$admin_link'>View Appointment</a>";
            $mail->send();
        } catch(Exception $e){}

        echo 'success';
    } else {
        echo 'error: '.$stmt->error;
    }

    $stmt->close();
    $con->close();

} else {
    echo 'error: All fields are required';
}
?>

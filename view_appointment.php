<?php
include 'db_con.php';

if(isset($_GET['token'])){
    $token = $_GET['token'];

    $stmt = $con->prepare("SELECT * FROM  book_appointement WHERE token=?");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();

    if($result){
        echo "<h2>Appointment Details</h2>";
        echo "<p><strong>Email:</strong> ".$result['email']."</p>";
        echo "<p><strong>Phone:</strong> ".$result['phone']."</p>";
        echo "<p><strong>Date:</strong> ".$result['date']."</p>";
        echo "<p><strong>Time:</strong> ".$result['time']."</p>";
        echo "<p><strong>Service:</strong> ".$result['service_type']."</p>";
        if(!empty($result['message'])){
            echo "<p><strong>Message:</strong> ".$result['message']."</p>";
        }
    } else {
        echo "Invalid or expired link.";
    }

} else {
    echo "No token provided.";
}
?>

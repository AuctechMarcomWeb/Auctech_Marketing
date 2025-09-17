<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $name = $_POST['name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $job_type = $_POST['job_type'] ?? '';
    
   
    if (!$name || !$phone || !$email || !$job_type) {
        echo 'error';
        exit;
    }

  
    $image_path = '';

 
    if (isset($_FILES['image_path']) && $_FILES['image_path']['error'] === 0) {
        $ext = strtolower(pathinfo($_FILES['image_path']['name'], PATHINFO_EXTENSION));
        
        // Only allow PDF, DOC, DOCX
        if (in_array($ext, ['pdf', 'doc', 'docx'])) {
            $image_path = 'upload_resume/' . uniqid('donation_', true) . '.' . $ext;
            move_uploaded_file($_FILES['image_path']['tmp_name'], $image_path);
        } else {
            echo 'error: Invalid file type.';
            exit;
        }
    }

  
    include('../db_con.php');


    $sql = "INSERT INTO add_job (name, phone, email, job_type, image_path) VALUES (?, ?, ?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sssss", $name, $phone, $email, $job_type, $image_path);

  
    if ($stmt->execute()) {
        echo 'success';
    } else {
        echo 'error';
    }

    $stmt->close();
    $con->close();
}
?>

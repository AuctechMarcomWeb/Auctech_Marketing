<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include '../db_con.php';

    // Input sanitization (basic)
    $email = trim($_POST['email']);
    $password = $_POST['password'];

   
    $stmt = $con->prepare("SELECT name, password FROM add_user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        
        if (password_verify($password, $row['password'])) {
            
            
            session_regenerate_id(true);

            $_SESSION['login_status'] = true;
            $_SESSION['firstname']   = $row['name'];  
                    

            header('Location: index.php');
            exit();
        }
    }

   
    echo "<script>alert('Email or Password is incorrect!'); window.location = 'login.php';</script>";

} else {
    echo "No data submitted!";
}
?>

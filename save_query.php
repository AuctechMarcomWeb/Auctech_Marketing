<?php
include('db_con.php');

$name = trim($_POST['name']);
$phone = trim($_POST['phone']);
$mode = $_POST['mode'];
$id = $_POST['id'];

if ($mode == 'auto') {
    if ($id) {
       
        $sql = "UPDATE query_form SET name = ?, phone = ? WHERE id = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ssi", $name, $phone, $id);
        if ($stmt->execute()) {
            echo "success|$id";
        } else {
            echo "error|Auto-update failed";
        }
    } else {
       
        $checkSql = "SELECT id FROM query_form WHERE phone = ? ORDER BY id DESC LIMIT 1";
        $checkStmt = $con->prepare($checkSql);
        $checkStmt->bind_param("s", $phone);
        $checkStmt->execute();
        $checkResult = $checkStmt->get_result();

        if ($checkResult->num_rows > 0) {
            
            $row = $checkResult->fetch_assoc();
            $existingId = $row['id'];

            $updateSql = "UPDATE query_form SET name = ?, phone = ? WHERE id = ?";
            $updateStmt = $con->prepare($updateSql);
            $updateStmt->bind_param("ssi", $name, $phone, $existingId);
            if ($updateStmt->execute()) {
                echo "success|$existingId";
            } else {
                echo "error|Auto-update by phone failed";
            }
        } else {
            
            $sql = "INSERT INTO query_form (name, phone) VALUES (?, ?)";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("ss", $name, $phone);
            if ($stmt->execute()) {
                echo "success|" . $stmt->insert_id;
            } else {
                echo "error|Auto-insert failed";
            }
        }
    }
} elseif ($mode == 'manual') {
    if ($id) {
        $sql = "UPDATE query_form SET name = ?, phone = ? WHERE id = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ssi", $name, $phone, $id);
        if ($stmt->execute()) {
            echo "success|$id";
        } else {
            echo "error|Manual update failed";
        }
    } else {
        
        $sql = "INSERT INTO query_form (name, phone) VALUES (?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ss", $name, $phone);
        if ($stmt->execute()) {
            echo "success|" . $stmt->insert_id;
        } else {
            echo "error|Manual insert failed";
        }
    }
}
?>

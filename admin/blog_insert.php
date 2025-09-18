<?php
include('../db_con.php');

if (isset($_POST['submit'])) {
    $con->begin_transaction();

    try {
        $blog_url_first = trim($_POST['blog_url']);
        $blog_url = str_replace(' ', '-', $blog_url_first);
        $blog_heading = trim($_POST['blog_heading']);
        $blog_desc_first = $_POST['blog_desc_first'];
        $blog_desc_second = $_POST['blog_desc_second'];
        $blog_point_one = $_POST['blog_point_one'];
        $blog_point_two = $_POST['blog_point_two'];
        $blog_desc_two = $_POST['blog_desc_two'];


        $sql = "INSERT INTO blogs (blog_url, blog_heading, blog_desc_first, blog_desc_second, blog_point_one, blog_point_two, blog_desc_two)
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("sssssss", $blog_url, $blog_heading, $blog_desc_first, $blog_desc_second, $blog_point_one, $blog_point_two, $blog_desc_two);
        if (!$stmt->execute()) {
            throw new Exception("Error inserting blog: " . $stmt->error);
        }

        $blog_id = $stmt->insert_id;
        $target_dir = "../blog/blog_uploads/";


        $allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp'];


        if (!empty($_FILES['images']['name'][0])) {
            foreach ($_FILES['images']['name'] as $key => $originalName) {
                $ext = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));
                if (!in_array($ext, $allowed)) {
                    throw new Exception("Invalid image type: $originalName");
                }

                $uniqueName = 'img_' . uniqid() . '.' . $ext;
                $target_path = $target_dir . $uniqueName;

                if (move_uploaded_file($_FILES['images']['tmp_name'][$key], $target_path)) {
                    $sql = "INSERT INTO blogs_images (blog_id, image) VALUES (?, ?)";
                    $stmt = $con->prepare($sql);
                    $stmt->bind_param("is", $blog_id, $uniqueName);
                    if (!$stmt->execute()) {
                        throw new Exception("Error inserting image: " . $stmt->error);
                    }
                } else {
                    throw new Exception("Failed to upload image: $originalName");
                }
            }
        }

        // Handle multiple logos
        if (!empty($_FILES['logos']['name'][0])) {
            foreach ($_FILES['logos']['name'] as $key => $originalLogo) {
                if ($_FILES['logos']['error'][$key] === 0) {
                    $ext = strtolower(pathinfo($originalLogo, PATHINFO_EXTENSION));
                    if (!in_array($ext, $allowed)) {
                        throw new Exception("Invalid logo type: $originalLogo");
                    }

                    $uniqueLogo = 'logo_' . uniqid() . '.' . $ext;
                    $target_path = $target_dir . $uniqueLogo;

                    if (move_uploaded_file($_FILES['logos']['tmp_name'][$key], $target_path)) {
                        // ⚠️ Make sure column exists in table
                        $sql = "INSERT INTO blogs_images (blog_id, logos) VALUES (?, ?)";
                        $stmt = $con->prepare($sql);
                        $stmt->bind_param("is", $blog_id, $uniqueLogo);
                        if (!$stmt->execute()) {
                            throw new Exception("Error inserting logo: " . $stmt->error);
                        }
                    } else {
                        throw new Exception("Failed to upload logo: $originalLogo");
                    }
                }
            }
        }

        $con->commit();
        header("Location: blog_list.php");
        exit();
    } catch (Exception $e) {
        $con->rollback();
        echo "Failed to insert blog and images: " . $e->getMessage();
    }

    $stmt->close();
    $con->close();
}
?>

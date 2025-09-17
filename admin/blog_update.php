
<?php
include '../db_con.php';

if (isset($_POST['submit'])) {
    $id = intval($_POST['id']);

   
    $blog_url_first = trim($_POST['blog_url']);
    $blog_url = str_replace(' ', '-', $blog_url_first);
    $blog_heading = trim($_POST['blog_heading']);
    $blog_desc_first = $_POST['blog_desc_first'];
    $blog_desc_second = $_POST['blog_desc_second'];
    $blog_point_one = $_POST['blog_point_one'];
    $blog_point_two = $_POST['blog_point_two'];
    $blog_desc_two = $_POST['blog_desc_two'];

  
    $query = "UPDATE blogs 
              SET blog_url = ?, blog_heading = ?, blog_desc_first = ?, blog_desc_second = ?, blog_point_one = ?, blog_point_two = ?, blog_desc_two = ?
              WHERE id = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("ssssssss", $blog_url, $blog_heading, $blog_desc_first, $blog_desc_second, $blog_point_one, $blog_point_two, $blog_desc_two, $id);
    $stmt->execute();

   
    if (!empty($_FILES['logos']['name'][0])) {
       
        $delete_logos_query = "DELETE FROM blogs_images WHERE blog_id = '$id' AND logos IS NOT NULL";
        mysqli_query($con, $delete_logos_query);

        foreach ($_FILES['logos']['tmp_name'] as $key => $tmp_name) {
            $original_name = $_FILES['logos']['name'][$key];
            $ext = pathinfo($original_name, PATHINFO_EXTENSION);
            $unique_name = 'logo_' . uniqid() . '.' . $ext;
            $file_tmp = $_FILES['logos']['tmp_name'][$key];

            move_uploaded_file($file_tmp, "../blog/blog_uploads/" . $unique_name);

            $insert_logo_query = "INSERT INTO blogs_images (blog_id, logos) VALUES ('$id', '$unique_name')";
            mysqli_query($con, $insert_logo_query);
        }
    }

   if (!empty($_FILES['images']['name'][0])) {
        foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
            $original_name = $_FILES['images']['name'][$key];
            $ext = pathinfo($original_name, PATHINFO_EXTENSION);
            $unique_name = 'img_' . uniqid() . '.' . $ext;
            $file_tmp = $_FILES['images']['tmp_name'][$key];

            move_uploaded_file($file_tmp, "../blog/blog_uploads/" . $unique_name);

           
            $check_image_query = "SELECT id FROM blogs_images WHERE blog_id = '$id' AND image IS NOT NULL LIMIT 1";
            $result = mysqli_query($con, $check_image_query);

            if (mysqli_num_rows($result) > 0) {
              
                $update_image_query = "UPDATE blogs_images SET image = '$unique_name' WHERE blog_id = '$id'";
                mysqli_query($con, $update_image_query);
            } else {
               
                $insert_image_query = "INSERT INTO blogs_images (blog_id, image) VALUES ('$id', '$unique_name')";
                mysqli_query($con, $insert_image_query);
            }
        }
    }

    
    header("Location: blog_list");
    exit();
}
?>

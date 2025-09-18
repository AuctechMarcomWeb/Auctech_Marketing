<?php
include 'check_session.php';
if (isset($_POST['submit'])) {
    include '../db_con.php';

    $name = $_POST['name'];
    $review = $_POST['review'];
    $designation = $_POST['designation'];

    if (!empty($_FILES["image"]["tmp_name"])) {
        $target_dir = "testimonial_uploads/";
        $file = $_FILES["image"]["tmp_name"];
        $original_filename = basename($_FILES["image"]["name"]);
        $ext = strtolower(pathinfo($original_filename, PATHINFO_EXTENSION));

        // Allowed extensions
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];

        if (!in_array($ext, $allowed)) {
            die("Only JPG, JPEG, PNG, GIF images are allowed.");
        }

        // Check if file is an actual image
        if (getimagesize($file) === false) {
            die("File is not a valid image.");
        }

        // Check file size (max 3 MB)
        if ($_FILES["image"]["size"] > 3 * 1024 * 1024) {
            die("File size must be 3 MB or less.");
        }

        $new_filename = uniqid() . '.' . $ext;
        $target_file = $target_dir . $new_filename;

        if (!move_uploaded_file($file, $target_file)) {
            die("Error uploading file.");
        }

        // Insert into database
        $sql = "INSERT INTO add_testimonial (name, review, designation, image_path) 
                VALUES ('$name', '$review', '$designation', '$target_file')";

        if ($con->query($sql) === TRUE) {
            header('Location: testimonials_list.php');
            exit;
        } else {
            echo "Error: " . $con->error;
        }
    } else {
        die("Please select an image to upload.");
    }

    $con->close();
}

?>


<?php

    include('header.php');
?>
<!-- END SIDEBAR-->
<div class="content-wrapper">

    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-6 col-lg-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Add Testimonials</div>
                    </div>
                    <div class="ibox-body">
                        <form method="POST" action="" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Profile Image </label>
                                    <input type="file" name='image' class="form-control file" required accept="image/*">
                                </div>   
                                <div class="form-group col-md-6">
                                    <label>Client Name </label>
                                    <input type="text" name='name' class="form-control file" required placeholder="Enter Name">
                                </div>  
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Client Review</label>
                                    <input type="text" name='review' class="form-control"
                                        placeholder="Enter Review">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Client designation</label>
                                    <input type="text" name="designation" class="form-control" placeholder="Enter designation">
                                </div>
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
    .note-editable {
        height: 400px;
    }
    </style>
    <?php
    include('footer.php');
?>
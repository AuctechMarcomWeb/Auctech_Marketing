<?php
include 'check_session.php';
?>

<?php
$user_id = $_GET['user_id'];
include '../db_con.php';

$que = "SELECT * FROM add_testimonial WHERE id = $user_id";
$res = mysqli_query($con, $que);
$row = mysqli_fetch_array($res);

if (isset($_POST['submit']))
{
    $testimonial_id = $_POST['testimonial_id'];
    $name = $_POST['name'];
    $review = $_POST['review'];
    $designation = $_POST['designation'];

    $sql = "UPDATE add_testimonial SET name='$name', review='$review', designation='$designation'";

    if (!empty($_FILES["image"]["tmp_name"]))
    {
        $target_dir = "testimonial_uploads/";
        $file = $_FILES["image"]["tmp_name"];
        $ext = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));

        // Only allow images
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($ext, $allowed))
        {
            die("Only JPG, JPEG, PNG, GIF images are allowed.");
        }

        $new_filename = uniqid() . '.' . $ext;
        $target_file = $target_dir . $new_filename;

        if (!move_uploaded_file($file, $target_file))
        {
            die("Error uploading image.");
        }

        $sql .= ", image_path='$target_file'";
    }

    $sql .= " WHERE id='$testimonial_id'";

    if ($con->query($sql) === TRUE)
    {
        header('Location: testimonials_list.php');
        exit;
    } else
    {
        echo "Error: " . $con->error;
    }

    $con->close();
}


include('header.php');
?>


<!-- END SIDEBAR-->
<div class="content-wrapper">

    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-6 col-lg-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Update Testimonial</div>
                    </div>
                    <div class="ibox-body">
                        <form method="POST" action="" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="hidden" name="testimonial_id" class="form-control"
                                        value="<?php echo htmlspecialchars($row['id']); ?>">
                                    <label>Profile Image </label>
                                    <input type="file" name='image' class="form-control file" accept="image/*">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Client Name </label>
                                    <input type="text" name='name' class="form-control file" required
                                        placeholder="Enter Name" value="<?php echo htmlspecialchars($row['name']); ?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Client Review</label>
                                    <input type="text" name='review' class="form-control" placeholder="Enter Review"
                                        value="<?php echo htmlspecialchars($row['review']); ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Designation</label>
                                    <input type="text" name="designation" class="form-control"
                                        placeholder="Enter designation"
                                        value="<?php echo htmlspecialchars($row['designation']); ?>">
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
<?php
include 'check_session.php';
include '../db_con.php';

$user_id = (int) $_GET['user_id'];

// Fetch old data
$que = "SELECT * FROM add_job WHERE id = $user_id";
$res = mysqli_query($con, $que);
$row = mysqli_fetch_array($res);

if (isset($_POST['submit'])) {
    $name      = $_POST['name'];
    $phone     = $_POST['phone'];
    $email     = $_POST['email'];
    $job_type  = $_POST['job_type'];
    $image_path = $row['image_path']; // default: purana path

    // Agar new file upload ki gayi hai
    if (isset($_FILES['image_path']) && $_FILES['image_path']['error'] == 0) {
        $image_ext = strtolower(pathinfo($_FILES['image_path']['name'], PATHINFO_EXTENSION));
        $allowed_ext = ['pdf', 'doc', 'docx'];

        if (in_array($image_ext, $allowed_ext)) {
            $image_path = 'upload_resume/' . uniqid('resume_', true) . '.' . $image_ext;
            move_uploaded_file($_FILES['image_path']['tmp_name'], $image_path);
        } else {
            echo "❌ Error: Please upload only PDF, DOC, or DOCX file.";
            exit;
        }
    }

    // Update query
    $sql = "UPDATE add_job 
            SET name='$name', phone='$phone', email='$email', job_type='$job_type', image_path='$image_path' 
            WHERE id=$user_id";

    if ($con->query($sql) === TRUE) {
        header('Location: job_list.php');
        exit;
    } else {
        echo "Error: " . $con->error;
    }
}
?>

<?php include('header.php'); ?>
<div class="content-wrapper">
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-6 col-lg-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Job Update</div>
                    </div>
                    <div class="ibox-body">
                        <form method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="job_id" value="<?php echo $row['id']; ?>">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>First Name</label>
                                    <input type="text" name="name" class="form-control" 
                                           value="<?php echo htmlspecialchars($row['name']); ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Phone</label>
                                    <input type="number" name="phone" class="form-control"  
                                           value="<?php echo htmlspecialchars($row['phone']); ?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" 
                                           value="<?php echo htmlspecialchars($row['email']); ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Job Name</label>
                                    <input type="text" name="job_type" class="form-control"  
                                           value="<?php echo htmlspecialchars($row['job_type']); ?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Resume (PDF/DOC/DOCX)</label>
                                    <input type="file" name="image_path" class="form-control" accept=".pdf,.doc,.docx,.cv,image/*">
                                    <?php if (!empty($row['image_path'])): ?>
                                        <small>Current: <a href="<?php echo $row['image_path']; ?>" target="_blank">View</a></small>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>

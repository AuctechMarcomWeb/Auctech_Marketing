<?php include 'check_session.php' ?>
<?php
include('../db_con.php');
include('header.php');
// Get total count of projects
$total_blog = $con->query("SELECT COUNT(*) AS total FROM blogs")->fetch_assoc()['total'];
$total_query = $con->query("SELECT COUNT(*) AS total FROM contact")->fetch_assoc()['total'];
$total_job = $con->query("SELECT COUNT(*) AS total FROM add_job")->fetch_assoc()['total'];
$total_appointment = $con->query("SELECT COUNT(*) AS total FROM book_appointement")->fetch_assoc()['total'];

?>
<!-- END SIDEBAR-->
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="ibox bg-success color-white widget-stat">
                    <div class="ibox-body">
                        <h2 class="m-b-5 font-strong"><?php echo $total_blog; ?></h2>
                        <div class="m-b-5"><a href='blog_list' class='text-white fw-bold'>Total Blogs</a></div><i
                            class=" widget-stat-icon"><img width="50" height="50"
                                src="https://img.icons8.com/ios-filled/50/FFFFFF/google-blog-search.png"
                                alt="google-blog-search" /></i>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="ibox bg-info color-white widget-stat">
                    <div class="ibox-body">
                        <h2 class="m-b-5 font-strong"><?php echo $total_query; ?></h2>
                        <div class="m-b-5"><a href='contact_querylist' class='text-white fw-bold'>Total Query</a></div><i
                            class="widget-stat-icon"><img width="50" height="50"
                                src="https://img.icons8.com/ios-filled/50/FFFFFF/ask-question.png"
                                alt="ask-question" /></i>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="ibox bg-warning color-white widget-stat">
                    <div class="ibox-body">
                        <h2 class="m-b-5 font-strong"><?php echo $total_job; ?></h2>
                        <div class="m-b-5"><a href='job_list' class='text-white fw-bold'>Total Jobs</a></div><i
                            class="widget-stat-icon"><img width="50" height="50"
                                src="https://img.icons8.com/ios-glyphs/30/FFFFFF/new-job.png" alt="ask-question" /></i>

                    </div>
                </div>
            </div>
             <div class="col-lg-3 col-md-6">
                <a href="booked_list.php">
                    <div class="ibox bg-blue color-white widget-stat">
                        <div class="ibox-body">
                            <h2 class="m-b-5 font-strong"><?php echo $total_appointment; ?></h2>
                            <div class="m-b-5 fw-bold mt-2">Total Appointment </div><i class=" widget-stat-icon"><img
                                    width="50" height="50"
                                    src="https://img.icons8.com/ios-filled/50/FFFFFF/event-accepted.png"
                                    alt="google-blog-search" /></i>

                        </div>
                    </div>
                </a>
            </div>
            
        </div>
    </div>
    <?php
    include('footer.php');
    ?>
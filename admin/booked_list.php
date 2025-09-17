<?php
include 'check_session.php';
include('header.php');
?>

<!-- END SIDEBAR-->
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->

    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Volunteer List</div>
            </div>
            <div class="ibox-body">
                <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                    width="100%">
                    <thead>
                        <tr>
                            <th>S.No.</th>

                            <th>Email</th>
                            <th>Phone</th>
                            <th>Book Date</th>
                            <th>Book Time</th>
                            <th>Service</th>
                            <th>Message</th>

                            <th class="text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        include('../db_con.php');
                        $fetch_query = "SELECT * FROM book_appointement";
                        $result = mysqli_query($con, $fetch_query);
                        $i = 1;
                        while ($row = mysqli_fetch_array($result))
                        {
                            ?>

                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row['email']; ?></td>

                                <td><?php echo $row['phone']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td>
                                    <?php
                                    $time24 = $row['time']; // e.g., 13:00:00
                                    echo date("h:i A", strtotime($time24)); // Output: 01:00 PM
                                    ?>
                                </td>
                                <td><?php echo $row['service_type']; ?></td>



                                <td><?php echo $row['message']; ?></td>

                                <td class="text-center">
                                    <!-- <a type="submit" class="btn btn-primary shadow btn-xs sharp me-1"
                                    href="donation_edit.php?user_id=<?php echo $row['id']; ?>" style="color:white;">
                                    <i class="fas fa-pencil-alt"></i>
                                </a> -->
                                    <form method="POST" action="booked_delete.php" style="display:inline;">
                                        <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" class="btn btn-danger shadow btn-xs sharp" name="delete"
                                            onclick="return confirm('Are you sure?')">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- Bootstrap Modal for QR Image -->
    <div class="modal fade" id="qrModal" tabindex="-1" aria-labelledby="qrModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" style="width: 400px; margin: auto;">
                <div class="modal-header justify-content-end">
                    <!-- Custom cross icon -->
                    <span style="font-size: 1.5rem; cursor: pointer;" data-bs-dismiss="modal">&times;</span>
                </div>
                <div class="modal-body text-center">
                    <img id="qrModalImage" src="" alt="Zoomed QR" class="img-fluid" style="max-height: 80vh;">
                </div>
            </div>
        </div>
    </div>
    <style>
        .dataTables_length {
            display: none;
        }

        .dataTables_filter {
            display: none;
        }
    </style>
    <?php
    include('footer.php');
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 & jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        $(document).ready(function () {
            $('.statusDropdown').change(function () {
                const status = $(this).val();
                const id = $(this).data('id');
                const selectElement = $(this);

                Swal.fire({
                    title: 'Are you sure?',
                    text: `Change status to "${status}"?`,
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, update it',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: 'update_status.php',
                            type: 'POST',
                            data: { id: id, status: status },
                            dataType: 'json',
                            success: function (response) {
                                Swal.fire({
                                    icon: response.status === 'success' ? 'success' : 'error',
                                    title: response.status === 'success' ? 'Success' : 'Error',
                                    html: response.message
                                });
                            },
                            error: function () {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: 'Server error while updating status.'
                                });
                            }
                        });
                    } else {

                        location.reload();
                    }
                });
            });
        });
    </script>
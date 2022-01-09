<?php
ob_start();
$title = "Profile";
include 'inc/csslinks.php';
include_once 'inc/connection.php';
include_once 'inc/functions.php';

$id = $_SESSION['userdata']['adminID'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $editname = $_POST['fullname'];
    $department = $_POST['department'];
    edituser($db,$editname,$department,$id);
}
?>
<div class="container-fluid">
    <h3 class="text-dark mb-4">Profile</h3>
    <div class="row mb-3">
        <div class="col-lg-4">
            <div class="card mb-3">
                <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="assets/img/<?php echo $_SESSION['userdata']['photo']; ?>" width="160" height="160">
                    <div class="mb-3"><span>Police Oficcer</span></div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <p class="m-0 fw-bold" style="color: #8a24b1;">User Settings</p>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="fullname"><strong>Full Name</strong></label>
                                            <input class="form-control" type="text" id="fullname" placeholder="Full Name..." value="<?php echo $_SESSION['userdata']['name']; ?>" name="fullname">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="username"><strong>Email Address</strong></label>
                                            <input class="form-control" readonly type="email" id="username" placeholder="Departmene" value="<?php echo $_SESSION['userdata']['username']; ?>" name="username">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="department"><strong>Department</strong></label>
                                            <input class="form-control" type="text" id="department" placeholder="Department..." value="<?php echo $_SESSION['userdata']['department']; ?>" name="department">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="sc_number"><strong>Security Number</strong></label>
                                            <input class="form-control disable" readonly type="text" id="sc_number" placeholder="<?php echo $_SESSION['userdata']['sc_number']; ?>" name="sc_number">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3"><button class="btn btn-sm" type="submit" style="background: #8a24b1;color: var(--bs-light);">Edit Informations</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
ob_end_flush();
include 'inc/footeradmin.php';
?>
<?php
ob_start();
$title = "Update";
include 'inc/csslinks.php';
include_once 'inc/connection.php';
include_once 'inc/functions.php';

$id = intval($_GET['id']);
$slc = $_GET['slc'];
$rec = getperson($db, $id, $slc);

/*if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $editname = $_POST['fullname'];
    $department = $_POST['department'];
    updateperson($db, $tt, $id, $reporter, $reporteremail, $phone, $name, $age, $contact, $details, $photo, $publish, $date);
}*/


?>
<div class="container-fluid">
    <h3 class="text-dark mb-4">Profile</h3>
    <div class="row mb-3">
        <div class="col-lg-4">
            <div class="card mb-3">
                <div class="card-body text-center shadow">
                    <a target="_blank" href="images/<?php echo $rec[$slc . '_photos']; ?>"><img style="padding: auto;" class="mb-3 mt-4" src="images/<?php echo $rec[$slc . '_photos']; ?>" width="80%" height="80%"></a>
                    <div class="mb-3"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <p class="m-0 fw-bold" style="color: #8a24b1;">Person Informations</p>
                        </div>
                        <div class="card-body">



                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="_name"><strong>Full Name</strong></label>
                                        <input readonly="" class="form-control" type="text" name="_name" value="<?php echo $rec[$slc . '_name']; ?>">

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="_reporter"><strong>Reporter Name</strong></label>
                                        <input readonly="" class="form-control" type="text" name="_reporter" value="<?php echo $rec[$slc . '_reporter']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="_phone"><strong>Telephone Number</strong></label>
                                        <input readonly="" class="form-control" type="text" value="<?php echo $rec[$slc . '_phone']; ?>" name="_phone">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="_reporteremail"><strong>Reporter Email</strong></label>
                                        <input readonly="" class="form-control" type="text" value="<?php echo $rec[$slc . '_reportermail']; ?>" name="_reporteremail">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">

                                    <div class="mb-3">
                                        <label class="form-label" for="_details"><strong>Details</strong></label>
                                        <textarea readonly="" class="txtareaintable form-control" type="text" name="_details"> <?php echo $rec[$slc . '_details']; ?>  </textarea>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="_contact"><strong>Address</strong></label>
                                        <textarea readonly="" class="txtareaintable form-control" type="text" name="_contact"> <?php echo $rec[$slc . '_contact']; ?>  </textarea>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="_age"><strong>Person Age</strong></label>
                                        <input readonly="" class="form-control" type="text" value="<?php echo $rec[$slc . '_age']; ?>" name="_age">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="userfile">Photo</label>
                                        <input readonly="" class="form-control" type="text" value="<?php echo $rec[$slc . '_photos']; ?>" name="_age">
                                    </div>
                                </div>
                            </div>

                            <form action="add.php" method="POST">

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="_show"><strong>Publishing</strong></label>
                                            <input name="_show" type="checkbox" class="checkk" <?php if ($rec[$slc . '_show'] == 1) {
                                                                                                    echo 'checked=""';
                                                                                                } ?>>
                                            <input class="invisible" type="text" name="_id" value="<?php echo $rec[$slc . '_id']; ?>">
                                            <input class="invisible" type="text" name="slc" value="<?php echo $slc; ?>">
                                            <button class="btn btn-sm" type="submit" name='update' style="background: #8a24b1;color: var(--bs-light);">Edit Publisihng</button>
                                        </div>
                                    </div>
                                </div>





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
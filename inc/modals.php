<div class="container-fluid" style="padding: 0px;">
    <div class="modal fade" role="dialog" tabindex="-1" id="deleteCheck">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Warning!</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete ?<br></p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>

                    <form action="" method="POST">
                        <button class="btn btn-danger" type="submit" name="delperson">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    // USING COOKIE FOR GET USER TO DELETING
    // JAVASCRIPT SEND COOCKİE AND PHP RECIVE İT 

    if (isset($_POST['delperson'])) {

        $userid =  $_COOKIE['userid'];
        delete($db, $userid, $tt, $slc);
    }
    ?>

    <?php
    ?>

    <!-- Add Modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="addModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="fa fa-plus"></i>&nbsp;Add <?php echo $title; ?></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form enctype="multipart/form-data" action="/add.php/" method="POST">
                        <!--Reporters İnformations-->
                        <div class="mb-3"><label class="form-label" for="_reporter">Reporter Name</label>
                            <input class="form-control" type="text" id="_reporter" name="_reporter" placeholder="Your Name...">
                        </div>

                        <div class="mb-3"><label class="form-label" for="_phone">Telephone Number</label>
                            <input class="form-control" type="text" name="_phone" required="" placeholder="xxx-xxx-xxx">
                        </div>

                        <div class="mb-3"><label class="form-label" for="_reporteremail">E-mail</label>
                            <input class="form-control" type="text" id="_reporteremail" name="_reporteremail" placeholder="Your Email...">
                        </div>

                        <!--Person İnformations-->

                        <div class="mb-3"><label class="form-label" for="reportType">Select Report Type</label>
                            <select class="form-select" name="select">
                                <option value="missingpeople" class="disabled selected">Missing Person Report</option>
                                <option value="criminalpeople">Criminal Report</option>
                            </select>
                        </div>

                        <div class="mb-3"><label class="form-label" for="_name">Person Name</label>
                            <input class="form-control" type="text" id="_name" name="_name" placeholder="Person name who you report...">
                        </div>

                        <div class="mb-3"><label class="form-label" for="_age">Person Age</label>
                            <input class="form-control" type="number" name="_age" required="">
                        </div>

                        <div class="mb-3"><label class="form-label" for="_contact">Address</label>
                            <textarea class="form-control" id="_contact" name="_contact"></textarea>
                        </div>


                        <div class="mb-3"><label class="form-label" for="_details">Message</label>
                            <textarea class="form-control" id="message" name="_details"></textarea>
                        </div>

                        <div class="mb-3"><label class="form-label" for="userfile">Photo</label>
                            <input class="form-control" type="file" name="userfile">
                        </div>

                        <div style="padding: auto;margin: auto;margin-top: 10px;">
                            <input type="checkbox" class="checkk" name="publish">
                            <label class="form-label" style="padding-left: 10px;">Publishing&nbsp;</label>
                        </div>

                </div>
                <div class="modal-footer"><button class="btn btn-danger" type="button" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit" name="admiadd">Add</button>
                </div>
                </form>
            </div>
        </div>
    </div>
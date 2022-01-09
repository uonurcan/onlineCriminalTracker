<?php
$title = "Contact Us - BugSens";
include 'inc/styleLinks.php';

?>
<main class="page contact-us-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="display-5" style="color: #8a24b1;">Contact Us</h2>
                <p>You can contact us by filling out the form below, report crimes, help missing people.</p>
            </div>
            
            <form enctype="multipart/form-data" action="add.php" method="POST" data-aos="zoom-out" data-aos-once="true" style="border-color: rgb(137,37,177);">

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

                <div class="mb-3">
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1"><em>I have read and agree to BugSens </em><a href="terms.html" target="_parent"><em>User Agreement and Privacy Policy.</em></a><br></label></div>
                </div>
                <div class="mb-3">
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2"><em>I am 18 years of age or older.&nbsp;</em><br></label></div>
                </div>
                <div class="mb-3"><button class="btn btn-primary" type="submit" name="formsend">Send</button></div>

            </form>
        </div>
    </section>
</main>

<?php
include 'inc/footer.php';
?>
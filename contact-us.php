<?php
$title ="Contact Us - BugSens";
include 'styleLinks.php';

 ?>

    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="display-5" style="color: #8a24b1;">Contact Us</h2>
                    <p>You can contact us by filling out the form below, report crimes, help missing people.</p>
                </div>
                <form data-aos="zoom-out" data-aos-once="true" style="border-color: rgb(137,37,177);">
                    <div class="mb-3"><label class="form-label" for="name">E-mail</label><input class="form-control" type="text" id="name" name="name" placeholder="Your Email..."></div>
                    <div class="mb-3"><label class="form-label" for="name">Name</label><input class="form-control" type="text" id="name-1" name="name" placeholder="Your Name..."></div>
                    <div class="mb-3"><label class="form-label" for="name">Surname</label><input class="form-control" type="text" id="name-2" name="name" placeholder="Your Surname..."></div>
                    <div class="mb-3"><label class="form-label" for="name">Select Report Type</label><select class="form-select">
                            <option value="missing_person" class="disabled selected">Missing Person Report</option>
                            <option value="criminal_report">Criminal Report</option>
                        </select></div>
                    <div class="mb-3"><label class="form-label" for="email">Telephone Number</label><input class="form-control" type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required="" placeholder="xxx-xxx-xxx"></div>
                    <div class="mb-3"><label class="form-label" for="subject">Address</label><input class="form-control" type="text" id="subject" name="subject" placeholder="Full Address"></div>
                    <div class="mb-3"><label class="form-label" for="message">Message</label><textarea class="form-control" id="message" name="message"></textarea></div>
                    <div class="mb-3"><label class="form-label" for="subject">Subject</label><input class="form-control" type="file"></div>
                    <div class="mb-3">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1"><em>I have read and agree to BugSens </em><a href="terms.html" target="_parent"><em>User Agreement and Privacy Policy.</em></a><br></label></div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2"><em>I am 18 years of age or older.&nbsp;</em><br></label></div>
                    </div>
                    <div class="mb-3"><button class="btn btn-primary" type="submit">Send</button></div>
                </form>
            </div>
        </section>
    </main>
   
 <?php
include 'footer.php';
include 'scriptLinks.php';

 ?>
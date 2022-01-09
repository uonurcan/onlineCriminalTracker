<?php
$title = "Missing People";
$slc = "mp";
$tt = 'missingpeople';

$personId = intval($_GET['id']);

include 'inc/styleLinks.php';
require_once 'inc/connection.php';
require 'inc/functions.php';

$personDetail = personDetail($db, $personId, $slc, $tt);

?>

<main class="page product-page">
    <section class="clean-block clean-product dark">
        <div class="container">
            <div class="block-heading" style="padding-top: 20px;">
                <h2 class="display-5" style="color: #8a24b1;"><?php echo $title; ?></h2>
            </div>
            <div class="block-content">
                <div class="product-info">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="gallery">
                                <div id="product-preview" class="vanilla-zoom">
                                    <div class="zoomed-image"></div>
                                    <div class="sidebar">
                                        <img class="img-fluid d-block small-preview" src="images/<?php echo $personDetail["mp_photos"]; ?>">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info">
                                <h3><b><?php echo $personDetail["mp_name"]; ?></b></h3>

                                <div class="summary">
                                    <h4><b>Phone: </b> <?php echo $personDetail["mp_phone"]; ?></h4>
                                    <div class="summary">
                                        <h4><b>Age: </b><?php echo $personDetail["mp_age"]; ?></h4>
                                        <div class="summary">
                                            <h5><b>Details:</b> </h5>
                                            <h6><?php echo $personDetail["mp_details"]; ?> </h6>
                                            <div class="summary">
                                                <h5><b>Contact Address :</b> </br></br> <?php echo $personDetail["mp_contact"]; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
include 'inc/footer.php';

?>
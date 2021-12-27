<?php
$title ="Missing People";
$slc = "mp";
$tt='missingpeople';

$personId = intval($_GET['id']);

include 'styleLinks.php';
require_once 'connection.php';
require 'functions.php';

$personDetail = personDetail($db, $personId, $slc,$tt);

 ?>

    <main class="page product-page">
        <section class="clean-block clean-product dark">
            <div class="container">
            <div class="block-heading" style="padding-top: 20px;">
                    <h2 class="display-5" style="color: #8a24b1;"><?php echo $title;?></h2>
                </div>
                <div class="block-content">
                    <div class="product-info">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="gallery">
                                    <div id="product-preview" class="vanilla-zoom">
                                        <div class="zoomed-image"></div>
                                        <div class="sidebar">
                                            <img class="img-fluid d-block small-preview" src="images/<?php echo $personDetail["mp_photos"];?>"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info">
                                    <h3><?php echo $personDetail["mp_name"]." ".$personDetail["mp_surname"];?></h3>
                                    <div class="rating"
                                    ><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star-half-empty.svg"><img src="assets/img/star-empty.svg"></div>
                                    <div class="price">
                                        <h3>$300.00</h3>
                                    <div class="summary">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec augue nunc, pretium at augue at, convallis pellentesque ipsum. Vestibulum diam risus, sagittis at fringilla at, pulvinar vel risus. Vestibulum dignissim eu nulla eu imperdiet. Morbi mollis tellus a nunc vestibulum consequat. Quisque tristique elit et nibh dapibus sodales. Nam sollicitudin a urna sed iaculis.</p>                    
                                    
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
include 'footer.php';
include 'scriptLinks.php';

 ?>
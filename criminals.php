<?php
$title = "Criminals";
$slc = 'cp';
$tt = 'criminalpeople';
include 'styleLinks.php';
include 'search.php';
?>

<?php
// List All items with bootsrap card template

    while ($rec = $r->fetch_assoc()) {
?>
        <div class="clean-blog-post">
            <div class="row">

                <div class="col-lg-5"><img class="rounded img-fluid" src="images/<?php echo $rec["cp_photos"]; ?>"></div>
                <div class="col-lg-7 col-xl-7">
                    <h3><?php echo $rec["cp_name"];?></h3>
                    <div class="info"><span class="text-muted">Jan 16, 2018 by&nbsp;<a href="#">John Smith</a></span></div>
                    <h6>Age : <?php echo $rec["cp_age"]; ?></h6>
                    <p><?php echo $rec["cp_details"]; ?></p>
                    <h6>Phone : <?php echo $rec["cp_phone"]; ?></h6>
                    <a class="btn btn-outline-primary btn-lg" role="button" href="/criminalPeople.php?id=<?php echo $rec["cp_id"] ?>" style="color: #8a24b1;border-color: #8a24b1;">Get Detail</a>
                </div>
            </div>
        </div>


<?php } ?>
</div>
</div>
</section>
</main>

<?php
include 'footer.php';
include 'scriptLinks.php';

?>
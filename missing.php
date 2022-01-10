<?php
$title = "Missing People";
$slc = "mp";
$tt = 'missingpeople';
include 'styleLinks.php';
include 'search.php';
?>

<?php
// List All items with bootsrap card template

while ($rec = $r->fetch_assoc()) {
    if ($rec[$slc . '_show'] == 1) {

?>
        <div class="clean-blog-post">
            <div class="row">

                <div class="col-lg-5"><img class="rounded img-fluid" src="images/<?php echo $rec["mp_photos"]; ?>"></div>
                <div class="col-lg-7 col-xl-7">
                    <h3><?php echo $rec["mp_name"]; ?></h3>
                    <div class="info"><span class="text-muted"><?php echo $rec["mp_date"]; ?><span> Reporter : <?php echo $rec["mp_reporter"]; ?></span></span></div>
                    <h6>Age : <?php echo $rec["mp_age"]; ?></h6>
                    <p><?php echo $rec["mp_details"]; ?></p>
                    <h6>Phone : <?php echo $rec["mp_phone"]; ?></h6>
                    <a class="btn btn-outline-primary btn-lg" role="button" href="/missingPeople.php?id=<?php echo $rec["mp_id"]; ?>" style="color: #8a24b1;border-color: #8a24b1;">Get Detail</a>
                </div>
            </div>
        </div>
<?php }
} ?>
</div>
</div>
</section>
</main>

<?php
include 'footer.php';

?>
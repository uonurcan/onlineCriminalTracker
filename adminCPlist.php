<?php
$slc = 'cp';
$tt = 'criminalpeople';
$title = "Criminal People";
require_once 'inc/connection.php';
include 'inc/csslinks.php';
include_once 'inc/functions.php';
$name = filter_input(INPUT_POST, 'name');
$r = searchPeople($db, $name, $slc, $tt);

include 'inc/modals.php';
?>
<section class="clean-block clean-blog-list dark">
    <div class="container">
        <h5 class="display-6" style="color: #8a24b1;"><?php echo $title; ?></h5>

        <div class="block-content" style="padding-top: 40px;">
            <div style="padding-bottom: 25px;">
                <div class="row">
                    <div class="col">

                        <form action="" method="POST">
                            <div class="input-group">
                                <input class="form-control" name="name" type="text" placeholder="Search here....">
                                <button class="btn btn-lg border rounded-pill" type="submit" name="submit" style="margin-left: 10px;background: rgba(138,36,177,0.87);color: var(--bs-white);">
                                    Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'inc/table.php';


include 'inc/footeradmin.php';

<?php
$name = filter_input(INPUT_POST, 'name');
require 'connection.php';
require 'functions.php';
$r = searchPeople($db, $name, $slc, $tt);

?>

<main class="page blog-post-list">
    <section class="clean-block clean-blog-list dark">
        <div class="container">
            <div class="block-heading" style="padding-top: 20px;">
                <h2 data-aos="fade-up" data-aos-delay="50" class="display-5" style="color: #8a24b1;"><?php echo $title; ?></h2>
                <p>You can search people by Name with searchbar below.</p>
            </div>
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
<?php
$title = "Home - BugSens";
include 'styleLinks.php';
require_once 'connection.php';
require 'functions.php';


$r_mp = homempdetail($db);
$r_cp = homecpdetail($db);

?>

<main class="page landing-page">
    <section class="clean-block clean-hero" style="color: rgba(0,0,0,0.54);background: url(&quot;assets/img/1BXNgBK-crime-scene-wallpaper.jpg&quot;) center / cover no-repeat;">
        <div class="pulse animated text" style="filter: brightness(NaN%);opacity: 0.69;transform-origin: center;">
            <h1>Online Criminal Tracking System</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
            <a class="btn btn-outline-light btn-lg" role="button" href="faq.php">Learn More</a>
        </div>
    </section>
    <section class="clean-block clean-info dark">
        <div class="container">
            <div class="block-heading">
                <h1 class="display-2" data-aos="zoom-in" data-aos-delay="150" style="color: #8a24b1;">The Lastest News</h1>
            </div>
            <div class="block-heading" style="padding-top: 0;height: 50px;">
                <h2 class="display-5" data-aos="zoom-in" data-aos-delay="250" style="color: #8a24b1;">Missing Person</h2>
            </div>
            <div class="row align-items-center carouselSet" data-aos="zoom-in" data-aos-delay="200">
                <div class="col">

                    <div class="carousel slide carousel-dark text-start" data-bs-ride="carousel" id="carousel-1">
                        <div class="carousel-inner">

                            <?php $i = 0;
                            while ($rec = $r_mp->fetch_assoc()) { ?>
                                <div class="carousel-item <?php if ($i == 0) {
                                                                echo "active";
                                                            } ?>">
                                    <img class="d-block img-fluid" style="border-radius:20px; margin:auto;  max-width: 60%; width:100% height: auto;" src="images/<?php echo $rec["mp_photos"]; ?>" alt="Slide Image">
                                    <div class="row" style="padding-top: 10px;">
                                        <div class="col">
                                            <h3><?php echo $rec['mp_name'] . ' ' . $rec['mp_surname']; ?></h3>
                                            <div class="getting-started-info">
                                                <p><?php echo $rec["mp_details"]; ?></p>
                                            </div><a class="btn btn-outline-primary btn-lg" role="button" href="/missingPeople.php?id=<?php echo $rec["mp_id"] ?>" style="color: #8a24b1;border-color: #8a24b1;">Get Detail</a>
                                        </div>
                                    </div>
                                </div>
                            <?php ++$i;
                            } ?>
                        </div>
                        <div><a class="carousel-control-prev cra" href="#carousel-1" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next cra" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="clean-block clean-info dark">
        <div class="container">
            <div class="block-heading" style="padding-top: 0;">
                <h2 class="display-5" data-aos="zoom-in" data-aos-delay="150" style="color: #8a24b1;">Most Wanted Person</h2>
            </div>
            <div class="row align-items-center carouselSet" data-aos="zoom-in" data-aos-delay="200">
                <div class="col">
                    <div class="carousel slide carousel-dark text-start" data-bs-ride="carousel" id="carousel-3">
                        <div class="carousel-inner">

                            <?php $i = 0;
                            while ($rec = $r_cp->fetch_assoc()) { ?>
                                <div class="carousel-item  <?php if ($i == 0) { echo "active";} ?>">
                                    <img class="d-block img-fluid" style="border-radius:20px; margin:auto;  max-width: 60%; width:100% height: auto;" src="images/<?php echo $rec["cp_photos"]; ?>" alt="Slide Image">
                                    <div class="row" style="padding-top: 10px;">
                                        <div class="col">
                                            <h3><?php echo $rec['cp_name'] . ' ' . $rec['cp_surname']; ?></h3>
                                            <div class="getting-started-info">
                                                <p><?php echo $rec["cp_details"]; ?></p>
                                            </div><a class="btn btn-outline-primary btn-lg" role="button" href="/criminalPeople.php?id=<?php echo $rec["cp_id"] ?>" style="color: #8a24b1;border-color: #8a24b1;">Get Detail</a>
                                        </div>
                                    </div>
                                </div>

                            <?php ++$i;} ?>

                        </div>
                        <div><a class="carousel-control-prev cra" href="#carousel-3" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a>
                            <a class="carousel-control-next cra" href="#carousel-3" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a>
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
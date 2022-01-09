<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="adminitems/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="adminitems/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="adminitems/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="adminitems/assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="adminitems/assets/css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<?php
if ($title != "Login") {
    include_once 'nav.php';
}
?>
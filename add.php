<?php
include_once 'functions.php';
require_once 'connection.php';

$slc = trim(filter_input(INPUT_POST, 'slc', FILTER_SANITIZE_STRING));
$publish = trim(filter_input(INPUT_POST, '_show', FILTER_SANITIZE_STRING));
$id = trim(filter_input(INPUT_POST, '_id', FILTER_SANITIZE_STRING));
$reporter = trim(filter_input(INPUT_POST, '_reporter', FILTER_SANITIZE_STRING));
$reporteremail = trim(filter_input(INPUT_POST, '_reporteremail', FILTER_SANITIZE_STRING));
$phone = trim(filter_input(INPUT_POST, '_phone', FILTER_SANITIZE_STRING));
$select = trim(filter_input(INPUT_POST, 'select', FILTER_SANITIZE_STRING));
$name = trim(filter_input(INPUT_POST, '_name', FILTER_SANITIZE_STRING));
$age = trim(filter_input(INPUT_POST, '_age', FILTER_SANITIZE_STRING));
$contact = trim(filter_input(INPUT_POST, '_contact', FILTER_SANITIZE_STRING));
$details = trim(filter_input(INPUT_POST, '_details', FILTER_SANITIZE_STRING));
$date = trim(filter_input(INPUT_POST, '_date', FILTER_SANITIZE_STRING));

if (isset($_POST['formsend']) || isset($_POST['admiadd'])) { //post all data

    //CHECK IMAGE FILE SETTINGS
    $upload_path = './images/'; // The place the files will be uploaded to (currently a 'files' directory).

    $filename = isset($_FILES['userfile']['name']) ? $_FILES['userfile']['name'] : 'noimage'; // Get the name of the file (including file extension).
    $ext = substr($filename, strpos($filename, '.'), strlen($filename) - 1); // Get the extension from the filename.

    // Check if we can upload to the specified path
    if (!is_writable($upload_path)) {
        die('You cannot upload');
    }
    // Upload the file to your specified path.
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $upload_path . $filename)) {

        //===== Add Recipe to the database ================================================================

        if (sendForm($db, $select, $reporter, $reporteremail, $phone, $name, $age, $contact, $details, $filename, $publish)) {
            echo ("<script LANGUAGE='JavaScript'>
                          window.alert('Succesfully Added!');
                          window.location.href='../admin.php';
                          </script>");
        }
    } else {
        die("<script LANGUAGE='JavaScript'>
            window.alert('Report Sended issuess');
            window.location.href='../';
            </script>");
    }
}

if (isset($_POST['update'])) {
    if (updateperson($db, $slc, $publish, $id)) {
        echo ("<script LANGUAGE='JavaScript'>
                  window.alert('Succesfully Updated!');
                  window.location.href='admin.php';
                  </script>");
    } else {
        die("<script LANGUAGE='JavaScript'>
        window.alert('There is a Error sending form!');
        window.location.href='admin.php';
        </script>");
    }
}

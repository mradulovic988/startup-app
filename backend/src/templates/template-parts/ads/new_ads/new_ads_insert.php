<?php
if (isset ($_POST['newAdsSubmit'])) {

    // Declaring all variables
    $ads_fileTmpPath            = $_FILES['ads_image']['tmp_name'];
    $ads_image                  = $_FILES['ads_image']['name'];
    $fileSize                   = $_FILES['ads_image']['size'];
    $fileType                   = $_FILES['ads_image']['type'];

    $ads_name                   = mysqli_real_escape_string($db->connection, $_POST['ads_name']);
    $ads_phone                  = mysqli_real_escape_string($db->connection, $_POST['ads_phone']);
    $ads_price                  = mysqli_real_escape_string($db->connection, $_POST['ads_price']);
    $ads_location               = mysqli_real_escape_string($db->connection, $_POST['ads_location']);
    $ads_category               = mysqli_real_escape_string($db->connection, print_r(implode('', $_POST['ads_category']), true));
    $ads_plan                   = mysqli_real_escape_string($db->connection, print_r(implode('', $_POST['ads_plan']), true));
    $ads_description            = mysqli_real_escape_string($db->connection, $_POST['ads_description']);

    $ads_fileNameCmps           = explode(".", $ads_image);
    $ads_fileExtension          = strtolower(end($ads_fileNameCmps));
    $ads_allowedfileExtensions  = array('jpg', 'png', 'jpeg');

    if (in_array($ads_fileExtension, $ads_allowedfileExtensions)) {
        $ads_uploadFileDir = '../pages/assets/img/ads_uploaded_image/';
        $ads_dest_path = $ads_uploadFileDir . $ads_image;

        if(move_uploaded_file($ads_fileTmpPath, $ads_dest_path)) {

//            $timestamp = time()-86400;
//
//            $date = strtotime("+7 day", $timestamp);
//            echo date('M d, Y', $date);

            $users_id = $_SESSION['id'];

            $add_ads = $db->query("INSERT INTO users_ads (user_id, ads_name, ads_description, ads_category, ads_image, ads_price, ads_location, ads_phone, ads_plan) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)", $users_id, $ads_name, $ads_description, $ads_category, $ads_image, $ads_price, $ads_location, $ads_phone, $ads_plan);

        }
    }
}
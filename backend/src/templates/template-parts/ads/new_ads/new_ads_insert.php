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
    $pending_request            = mysqli_real_escape_string($db->connection, $_POST['pending_request']);

    $ads_fileNameCmps           = explode(".", $ads_image);
    $ads_fileExtension          = strtolower(end($ads_fileNameCmps));
    $ads_allowedfileExtensions  = array('jpg', 'png', 'jpeg');

    if (in_array($ads_fileExtension, $ads_allowedfileExtensions)) {
        $ads_uploadFileDir = '../pages/assets/img/ads_uploaded_image/';
        $ads_dest_path = $ads_uploadFileDir . $ads_image;

        $maxsize    = 2097152;
        if ($fileSize > $maxsize) {
            die();
        }

        if(move_uploaded_file($ads_fileTmpPath, $ads_dest_path)) {

            $ads_plan = $_POST['ads_plan'];

            /**
             * Optimize this foreach bellow
             */
            foreach ($ads_plan as $item) {
                $users_id = $_SESSION['id'];

                if ($item == 'Free')
                    $add_free_ads = $db->query("INSERT INTO users_ads (user_id, ads_name, ads_description, ads_category, ads_image, ads_price, ads_location, ads_phone, ads_plan, ads_end_date, ads_pending) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", $users_id, $ads_name, $ads_description, $ads_category, $ads_image, $ads_price, $ads_location, $ads_phone, $ads_plan, $function->choosePlan(3, 'Free'), $pending_request);

                elseif ($item == 'Basic')
                    $add_basic_ads = $db->query("INSERT INTO users_ads (user_id, ads_name, ads_description, ads_category, ads_image, ads_price, ads_location, ads_phone, ads_plan, ads_end_date, ads_pending) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", $users_id, $ads_name, $ads_description, $ads_category, $ads_image, $ads_price, $ads_location, $ads_phone, $ads_plan, $function->choosePlan(5, 'Basic'), $pending_request);

                elseif ($item == 'Premium')
                    $add_premium_ads = $db->query("INSERT INTO users_ads (user_id, ads_name, ads_description, ads_category, ads_image, ads_price, ads_location, ads_phone, ads_plan, ads_end_date, ads_pending) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", $users_id, $ads_name, $ads_description, $ads_category, $ads_image, $ads_price, $ads_location, $ads_phone, $ads_plan, $function->choosePlan(7, 'Premium'), $pending_request);

                else
                    $add_delux_ads = $db->query("INSERT INTO users_ads (user_id, ads_name, ads_description, ads_category, ads_image, ads_price, ads_location, ads_phone, ads_plan, ads_end_date, ads_pending) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", $users_id, $ads_name, $ads_description, $ads_category, $ads_image, $ads_price, $ads_location, $ads_phone, $ads_plan, $function->choosePlan(10, 'Delux'), $pending_request);
            }
        }
    }
}
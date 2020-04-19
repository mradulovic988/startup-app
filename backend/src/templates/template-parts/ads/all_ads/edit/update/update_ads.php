<?php
if (isset ($_POST['editAdsSubmit'])) {

    // Declaring all variables
    $ads_edit_fileTmpPath            = $_FILES['ads_edit_image']['tmp_name'];
    $ads_edit_image                  = $_FILES['ads_edit_image']['name'];
    $fileSizeedit_                   = $_FILES['ads_edit_image']['size'];
    $fileTypeedit_                   = $_FILES['ads_edit_image']['type'];

    $ads_edit_name                   = mysqli_real_escape_string($db->connection, $_POST['ads_edit_name']);
    $ads_edit_phone                  = mysqli_real_escape_string($db->connection, $_POST['ads_edit_phone']);
    $ads_edit_price                  = mysqli_real_escape_string($db->connection, $_POST['ads_edit_price']);
    $ads_edit_location               = mysqli_real_escape_string($db->connection, $_POST['ads_edit_location']);
    $ads_edit_category               = mysqli_real_escape_string($db->connection, print_r(implode('', $_POST['ads_edit_category']), true));
    $ads_edit_plan                   = mysqli_real_escape_string($db->connection, print_r(implode('', $_POST['ads_edit_plan']), true));
    $ads_edit_description            = mysqli_real_escape_string($db->connection, $_POST['ads_edit_description']);
    $pending_edit_request            = mysqli_real_escape_string($db->connection, $_POST['pending_edit_request']);

    $ads_edit_fileNameCmps           = explode(".", $ads_edit_image);
    $ads_edit_fileExtension          = strtolower(end($ads_edit_fileNameCmps));
    $ads_edit_allowedfileExtensions  = array('jpg', 'png', 'jpeg');

    if (in_array($ads_edit_fileExtension, $ads_edit_allowedfileExtensions)) {
        $ads_edit_uploadFileDir = '../pages/assets/img/ads_uploaded_image/';
        $ads_edit_dest_path = $ads_edit_uploadFileDir . $ads_edit_image;

        $maxsizeedit_    = 2097152;
        if ($fileSizeedit_ > $maxsizeedit_) {
            die();
        }

        if(move_uploaded_file($ads_edit_fileTmpPath, $ads_edit_dest_path)) {

            $ads_edit_plan = $_POST['ads_edit_plan'];

            /**
             * Optimize this foreach bellow
             */
            foreach ($ads_edit_plan as $item) {
                $users_id = $_SESSION['id'];

                $dbEditId = $_POST['dbEditId'];

                if ($item == 'Free')
                    $add_edit_free_ads = $db->query("UPDATE users_ads SET ads_name = ?, ads_description = ?, ads_category = ?, ads_image = ?, ads_price = ?, ads_location = ?, ads_phone = ?, ads_plan = ?, ads_end_date = ?, ads_pending = ? WHERE id = ?", $ads_edit_name, $ads_edit_description, $ads_edit_category, $ads_edit_image, $ads_edit_price, $ads_edit_location, $ads_edit_phone, $ads_edit_plan, $function->choosePlan(3, 'Free'), $pending_edit_request, $dbEditId);


                elseif ($item == 'Basic')
                    $add_edit_basic_ads = $db->query("UPDATE users_ads SET ads_name = ?, ads_description = ?, ads_category = ?, ads_image = ?, ads_price = ?, ads_location = ?, ads_phone = ?, ads_plan = ?, ads_end_date = ?, ads_pending = ? WHERE id = ?", $ads_edit_name, $ads_edit_description, $ads_edit_category, $ads_edit_image, $ads_edit_price, $ads_edit_location, $ads_edit_phone, $ads_edit_plan, $function->choosePlan(5, 'Basic'), $pending_edit_request, $dbEditId);

                elseif ($item == 'Premium')
                    $add_edit_premium_ads = $db->query("UPDATE users_ads SET ads_name = ?, ads_description = ?, ads_category = ?, ads_image = ?, ads_price = ?, ads_location = ?, ads_phone = ?, ads_plan = ?, ads_end_date = ?, ads_pending = ? WHERE id = ?", $ads_edit_name, $ads_edit_description, $ads_edit_category, $ads_edit_image, $ads_edit_price, $ads_edit_location, $ads_edit_phone, $ads_edit_plan, $function->choosePlan(7, 'Premium'), $pending_edit_request, $dbEditId);

                else
                    $add_edit_delux_ads = $db->query("UPDATE users_ads SET ads_name = ?, ads_description = ?, ads_category = ?, ads_image = ?, ads_price = ?, ads_location = ?, ads_phone = ?, ads_plan = ?, ads_end_date = ?, ads_pending = ? WHERE id = ?", $ads_edit_name, $ads_edit_description, $ads_edit_category, $ads_edit_image, $ads_edit_price, $ads_edit_location, $ads_edit_phone, $ads_edit_plan, $function->choosePlan(10, 'Delux'), $pending_edit_request, $dbEditId);
            }
        }
    }
    $function->redirect($_SERVER['REQUEST_URI']);
}
<?php
if (isset ($_POST['ads_contact'])) {

    // Declaring form variable
    $ads_fullname   = $_POST['ads_fullname'];
    $ads_email      = $_POST['ads_email'];
    $ads_message    = $_POST['ads_message'];

    if (isset($_GET['id'])) {
        $single_ads = $_GET['id'];
    }

    // Declaring the database variable
    $adsContact = $db->query('SELECT * FROM users_ads INNER JOIN users ON users_ads.user_id = users.id WHERE users_ads.id = ?', $single_ads)->fetchArray();
    $db_ads_email   = $adsContact['email']; // Email from the ad
    $db_ads_name    = $singleAds['ads_name']; // Name of the ad

    // Sanitize this bellow
    $to_email = $db_ads_email;
    $subject = $db_ads_name . $ads_fullname;
    $message = $ads_message;
    $headers = 'From: '. $ads_email;
    mail($to_email,$subject,$message,$headers);

    if (!empty($to_email && $subject && $message && $headers)) { ?>
        <div class="alert alert-success" role="alert">
            Thank you for the message.
        </div>
    <?php }
}
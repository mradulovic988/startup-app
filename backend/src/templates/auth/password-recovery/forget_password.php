<?php

if (isset($_POST['recoveryPassword'])) {

    // Declaring variables
    $username   = $_POST['username'];
    $email      = $_POST['email'];

    $passwordRecovery = $db->query('SELECT username, email FROM users WHERE username = ?', $username)->fetchAll();

    foreach ($passwordRecovery as $password) {
        $db_username    = $password['username'];
        $db_password    = $password['password'];
        $db_email       = $password['email'];
    }

    if ($username !== $db_username && $email !== $db_email) {
        $error = '<p class="text-danger mt-2"><em>We can\'t find account with those credentials. Please try again.</em></p>';
    } elseif ($username === $db_username && $email === $db_email) {

        $recovery = $function->password_generate(15).'\n';

        $recoverySuccessMsg = '<p class="text-info mt-2"><em>Your password is succesfully changed. Please check your email and follow the instruction.</em></p>';

        $recPassword = md5($recovery);

        $recPassword = $db->query('UPDATE users SET password = ? WHERE username = ?', $recPassword, $username);

        include 'forget_password_mail.php'; // Including PHPMailer email template
    } else {
        $error = '<p class="text-danger mt-2"><em>We can\'t find account with those credentials. Please try again.</em></p>';
    }
}
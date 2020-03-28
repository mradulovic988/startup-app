<?php

if (isset($_POST['recoveryPassword'])) {

    // Declaring variables
    $username   = $_POST['username'];
    $email      = $_POST['email'];

    $passwordRecovery = $connection->prepare("SELECT * FROM users WHERE username = ?");
    $passwordRecovery->bind_param("s", $username);
    $passwordRecovery->execute();

    $result = $passwordRecovery->get_result();

    while ($row = $result->fetch_assoc()) {
        $db_username    = $row['username'];
        $db_password    = $row['password'];
        $db_email       = $row['email'];
    }

    $passwordRecovery->close();

    if ($username !== $db_username && $email !== $db_email) {
        $error = '<p class="text-danger mt-2"><em>We can\'t find account with those credentials. Please try again.</em></p>';
    } elseif ($username === $db_username && $email === $db_email) {

        $recovery = $function->password_generate(15).'\n';

        $recoverySuccessMsg = '<p class="text-info mt-2"><em>Your password is succesfully changed. Please check your email and follow the instruction.</em></p>';

        $recPassword = md5($recovery);

        $updatePassword = $connection->prepare("UPDATE users SET password = ? WHERE username = ?");
        $updatePassword->bind_param("ss", $recPassword, $username);
        $updatePassword->execute();
        $updatePassword->close();

        include 'forget_password_mail.php'; // Including PHPMailer email template
    } else {
        $error = '<p class="text-danger mt-2"><em>We can\'t find account with those credentials. Please try again.</em></p>';
    }
}
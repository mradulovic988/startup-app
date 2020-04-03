<?php
/**
 * Register template
 *
 * @author Marko
 * @version 1.0
 *
 */

$username = "";
$email    = "";
$errors = array();

if ( isset ($_POST['create_user']) ) {
    $fname = mysqli_real_escape_string($db->connection, $_POST['fname']);
    $lname = mysqli_real_escape_string($db->connection, $_POST['lname']);
    $username = mysqli_real_escape_string($db->connection, $_POST['username']);
    $email = mysqli_real_escape_string($db->connection, $_POST['email']);
    $password = mysqli_real_escape_string($db->connection, $_POST['password']);
    $password_confirm = mysqli_real_escape_string($db->connection, $_POST['password_confirm']);

    // Validation
    if (empty($fname)) { array_push($errors, "First Name is required"); }
    if (empty($lname)) { array_push($errors, "Last Name is required"); }
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_confirm)) { array_push($errors, "Password is required"); }
    if ($password != $password_confirm) {
        array_push($errors, "The two passwords do not match");
    }

    $username_lenght = strlen($username);
    $password_lenght = strlen($password);

    if ($username_lenght < 5) { array_push($errors, "Username needs to have more than 5 characters."); }
    if ($password_lenght < 8) { array_push($errors, "Password needs to have more than 8 characters."); }

    // Check if the username and email are uniq
    $register = $db->query('SELECT * FROM users WHERE username = ? OR email = ? LIMIT 1', $username, $email)->fetchArray();

    if ($register) {
        if ($register['username'] === $username) {
            array_push($errors, "Username already exists.");
        }

        if ($register['email'] === $email) {
            array_push($errors, "Email already exists.");
        }
    }

    if (count($errors) == 0) {
        $password = md5($password_confirm);

        $add_user = $db->query("INSERT INTO users (fname, lname, username, email, password, date) VALUES (?, ?, ?, ?, ?, NOW())", $fname, $lname, $username, $email, $password);

        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";

        $add_user->close();

        header('location: http://app.beta/backend/pages/login.php');
    }
}
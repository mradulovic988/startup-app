<?php
/**
 * Register template
 *
 * @author Marko
 * @version 1.0
 *
 */

include 'C:/xampp/htdocs/App/config/db.php';

$username = "";
$email    = "";
$errors = array();

if ( isset ($_POST['create_user']) ) {
    $fname = mysqli_real_escape_string($connection, $_POST['fname']);
    $lname = mysqli_real_escape_string($connection, $_POST['lname']);
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $password_confirm = mysqli_real_escape_string($connection, $_POST['password_confirm']);

    // Validation
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_confirm)) { array_push($errors, "Password is required"); }
    if ($password != $password_confirm) {
        array_push($errors, "The two passwords do not match");
    }

    // Check if the username and email are uniq
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $results = mysqli_query($connection, $user_check_query);
    $user = mysqli_fetch_assoc($results);

    if ($user) {
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists.");
        }

        if ($user['email'] === $email) {
            array_push($errors, "Email already exists.");
        }
    }

    if (count($errors) == 0) {
        $password = $password_confirm;

        $add_user = $connection->prepare("INSERT INTO users (fname, lname, username, email, password, date) VALUES (?, ?, ?, ?, ?, NOW())");
        $add_user->bind_param("sssss", $fname, $lname, $username, $email, $password);
        $add_user->execute();

        mysqli_query($connection, $add_user);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";

        $add_user->close();

        header('location: index.php');
    }
}
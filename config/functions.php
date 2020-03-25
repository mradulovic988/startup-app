<?php
/**
 * All functions which we are using in the application
 */

// Redirection
function redirect($location) {
    header("Location: ".$location);
    exit();
}

// Check if the user is logged in
function logout() {
    session_start();
    session_unset();
    session_destroy();

    redirect('http://appdev/public/login.php');
    exit;
}

// Check if it's user logged in
function loggedIn() {
    if (!isset($_SESSION['username']) && $_SESSION['username'] !== '') {
        redirect('login.php');
    }
}
<?php
/**
 * All functions which we are using in the application
 */

class Functions
{

    public $connection;

    // Redirection
    public function redirect($location)
    {
        header("Location: " . $location);
        exit();
    }

    // Check if the user is logged in
    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();

        $this->redirect('http://appdev/frontend/index.php');
        exit;
    }

    // Check if it's user logged in
    public function loggedIn()
    {
        if (!isset($_SESSION['username']) && $_SESSION['username'] !== '') {
            $this->redirect('login.php');
        }
    }
}

$function = new Functions();
<?php
/**
 * All functions which we are using in the application
 */

class Functions
{

    public $connection;
    public $data;
    public $placeholder;
    public $dataQuery;
    public $index;
    public $dataPlaceholder;
    public $placeholderIndex;

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

        $this->redirect('http://app.beta/frontend/index.php');
        exit;
    }

    // Check if it's user logged in
    public function loggedIn()
    {
        if (!isset($_SESSION['username']) && $_SESSION['username'] !== '') {
            $this->redirect('login.php');
        }
    }

    // Password generator
    public function password_generate($chars)
    {
        $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz!@#$%^&*()_+';
        return substr(str_shuffle($data), 0, $chars);
    }

    // Check if is data empty
    public function checkEmpty($data, $placeholder)
    {
        $empty = !empty($_SESSION[$data]) ? $_SESSION[$data] : $placeholder;
        return $empty;
    }

    // Select data from any query
    public function selectQuery($dataQuery, $index, $placeholderIndex) {
        $emptyQuery = !empty ($dataQuery[$index]) ? $dataQuery[$index] : $placeholderIndex;
        return $emptyQuery;
    }

}

$function = new Functions();
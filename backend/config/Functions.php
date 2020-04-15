<?php
/**
 * All functions which we are using in the application
 */

class Functions
{
    public $data;
    public $placeholder;
    public $index;

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
    public function selectQuery($path, $dataQuery, $index, $placeholderIndex)
    {
        if (!empty($path)) :
            if (!empty($dataQuery[$index])) : return $path.$dataQuery[$index]; else : return $placeholderIndex; endif;
        else :
            if (!empty($dataQuery[$index])) : return $dataQuery[$index]; else : return $placeholderIndex; endif;
        endif;
    }

    // All plans for the ads
    public function choosePlan($dayDelay, $plan)
    {
        $timestamp = time()-86400;
        $date = strtotime('+'.$dayDelay.' day', $timestamp);

        return date('Y-m-d', $date);
    }

}

$function = new Functions();
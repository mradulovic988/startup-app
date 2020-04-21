<?php
/**
 * All functions which we are using in the application
 */
require_once 'Database.php';

class Functions extends Database
{
    public $data;
    public $placeholder;
    public $index;

    public function __construct($dbhost = 'localhost', $dbuser = 'root', $dbpass = '', $dbname = 'app', $charset = 'utf8')
    {
        parent::__construct($dbhost, $dbuser, $dbpass, $dbname, $charset);

        $this->adsExpired(); // Deleting expired plans depending on users plans and date
    }

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

    // Deleting expired ads depending on their plans
    public function adsExpired()
    {
        $selectPlans = $this->query('SELECT user_id, ads_image, ads_end_date FROM users_ads')->fetchAll();

        foreach ($selectPlans as $plan) {
            if ($plan['ads_end_date'] === date('Y-m-d')) {
                $this->query('DELETE FROM users_ads WHERE ads_end_date = ?', date('Y-m-d'));

                unlink('../pages/assets/img/ads_uploaded_image/'.$plan['ads_image']);
            }
        }
    }

    // Excerpt
    public function getExcerpt($str, $startPos=0, $maxLength=100) {
        if(strlen($str) > $maxLength) {
            $excerpt   = substr($str, $startPos, $maxLength-3);
            $lastSpace = strrpos($excerpt, ' ');
            $excerpt   = substr($excerpt, 0, $lastSpace);
            $excerpt  .= ' ...';
        } else {
            $excerpt = $str;
        }

        return $excerpt;
    }

    // If the user is admin
    public function isAdmin()
    {
        if ($_SESSION['user_role'] !== 10)
            $this->redirect('/backend/pages/index.php');
    }

}

$function = new Functions();
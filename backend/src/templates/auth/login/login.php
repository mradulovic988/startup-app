<?php

// Login
if (isset($_POST['login_user'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$password = md5($password);

    $update_users = $db->query('SELECT id, username, password, fname, lname, email, date, user_role FROM users WHERE username = ?', $username)->fetchAll();

    foreach ($update_users as $update_user) {
        $db_id          = $update_user['id'];
        $db_username    = $update_user['username'];
        $db_password    = $update_user['password'];
        $db_firstname   = $update_user['fname'];
        $db_lastname    = $update_user['lname'];
        $db_email       = $update_user['email'];
        $db_date        = $update_user['date'];
        $db_user_role   = $update_user['user_role'];
    }

	if ($username !== $db_username && $password !== $db_password) {
	    $function->redirect('login.php');
	} elseif ($username == $db_username && $password == $db_password) {

		$_SESSION['id']         = $db_id;
		$_SESSION['username']   = $db_username;
		$_SESSION['password']   = $db_password;
		$_SESSION['fname']      = $db_firstname;
		$_SESSION['lname']      = $db_lastname;
		$_SESSION['email']      = $db_email;
		$_SESSION['date']       = $db_date;
		$_SESSION['user_role']  = $db_user_role;

		$function->redirect('../../../backend/pages/profile-settings.php');
	} else {
	    $function->redirect('login.php');
	}

	$update_user->close();
}
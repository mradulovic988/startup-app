<?php

// Login
if (isset($_POST['login_user'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$password = md5($password);

	$update_user = $connection->prepare("SELECT * FROM users WHERE username = ?");
	$update_user->bind_param("s", $username);
	$update_user->execute();

	$result = $update_user->get_result();

	while ($row = $result->fetch_assoc()) {
	    $db_id          = $row['id'];
		$db_username    = $row['username'];
		$db_password    = $row['password'];
		$db_firstname   = $row['fname'];
		$db_lastname    = $row['lname'];
        $db_email       = $row['lname'];
        $db_date        = $row['date'];
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

		$function->redirect('../../../backend/public/index.php');
	} else {
	    $function->redirect('login.php');
	}

	$update_user->close();
}
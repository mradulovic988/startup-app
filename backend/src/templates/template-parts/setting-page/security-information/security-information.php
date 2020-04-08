<?php
// Update user password
if (isset($_POST['editSecurity'])) {

    $pass = md5($_POST['pass']);

    $editSecurity = $db->query('UPDATE users SET password = ? WHERE id = ?', $pass, $_SESSION['id']);

}
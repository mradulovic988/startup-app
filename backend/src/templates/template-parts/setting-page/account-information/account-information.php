<?php
if (isset($_POST['deleteAccount'])) {

    $delete_account = $db->query('DELETE FROM users WHERE id = ?', $_SESSION['id']);

    $function->redirect('http://app.beta/frontend/index.php');
}
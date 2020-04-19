<?php
if (isset($_POST['updateUserRole'])) {
    $fromDbId    = $_POST['fromDbId'];
    $profileEditAdmin = $db->query('UPDATE users SET user_role = ? WHERE id = ?', '10', $fromDbId);
    $function->redirect($_SERVER['REQUEST_URI']);
}
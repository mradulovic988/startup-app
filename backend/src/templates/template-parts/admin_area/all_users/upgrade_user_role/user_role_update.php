<?php
if (isset($_POST['updateUserRole'])) {
    $fromDbId    = $_POST['fromDbId'];

    $profileEdit = $db->query('UPDATE users SET user_role = ? WHERE id = ?', '10', $fromDbId);
}
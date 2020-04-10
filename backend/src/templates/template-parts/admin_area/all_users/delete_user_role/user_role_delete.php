<?php
if (isset($_POST['deleteUserRole'])) {
    $fromDbDeleteId = $_POST['fromDbDeleteId'];
    $user_role_delete = $db->query('DELETE FROM users WHERE id = ?', $fromDbDeleteId);
}
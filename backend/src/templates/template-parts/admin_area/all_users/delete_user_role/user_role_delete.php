<?php
if (isset($_POST['deleteUserRole'])) {
    $fromDbDeleteId = $_POST['fromDbDeleteId'];
    $user_role_select = $db->query('SELECT profile_image FROM users')->fetchArray();
    $user_role_delete = $db->query('DELETE FROM users WHERE id = ?', $fromDbDeleteId);

    unlink('assets/img/uploaded_image/'.$user_role_select['profile_image']);

    $function->redirect($_SERVER['REQUEST_URI']);
}
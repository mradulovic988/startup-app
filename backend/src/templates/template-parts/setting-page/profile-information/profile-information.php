<?php

$settings = $db->query('SELECT * FROM users WHERE id = ?', $_SESSION['id'])->fetchAll();

foreach ($settings as $setting) { ?>
    <p class="mb-0">First Name: <span class="text-muted"><?php echo $setting['fname']; ?></span></p>
    <p class="mb-0">Last Name: <span class="text-muted"><?php echo $setting['lname']; ?></span></p>
    <p class="mb-0">Username: <span class="text-muted"><?php echo $setting['username']; ?></span></p>
    <p class="mb-0">Email: <span class="text-muted"><?php echo $setting['email']; ?></span></p>
    <p class="mb-0">Member since: <span class="text-muted"><?php echo strstr(str_replace('-', '/', $setting['date']), ' ', true); ?></span></p>

<?php }

// Update data regarding user profile
if (isset($_POST['editProfile'])) {
    $fname  = $_POST['fname'];
    $lname  = $_POST['lname'];
    $email  = $_POST['email'];

    $profileEdit = $db->query('UPDATE users SET fname = ?, lname = ?, email = ? WHERE id = ?', $fname, $lname, $email, $_SESSION['id']);
    $function->redirect($_SERVER['REQUEST_URI']);
}
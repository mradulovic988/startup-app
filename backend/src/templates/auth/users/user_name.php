<div class="sb-sidenav-footer">
    <div class="small">Welcome back: <?php echo $_SESSION['fname'].' '.$_SESSION['lname']; ?></div>
<!--    <div class="small">Member since: --><?php //echo strstr(str_replace('-', '/', $_SESSION['date']), ' ', true); ?><!--</div>-->
    <div class="small">User role: <?= $isAdmin = ($_SESSION['user_role'] === 10) ? 'Admin' : 'Customer'; ?></div>
</div>
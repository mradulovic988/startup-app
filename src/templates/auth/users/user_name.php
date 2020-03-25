<div class="sb-sidenav-footer">
    <div class="small">Logged in as: <?php echo $_SESSION['fname'].' '.$_SESSION['lname']; ?></div>
    <div class="small">Member since: <?php echo strstr(str_replace('-', '/', $_SESSION['date']), ' ', true); ?></div>
</div>
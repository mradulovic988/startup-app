<?php ob_start(); ?>
<?php session_start(); ?>
<?php include 'C:/xampp/htdocs/App/backend/config/Database.php'; ?>
<?php include 'C:/xampp/htdocs/App/backend/config/Localization.php'; ?>
<?php include 'C:/xampp/htdocs/App/backend/config/Functions.php'; ?>

<?php $function->loggedIn(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>App</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="icon" href="../../../../frontend/assets/img/brand/favicon.png" type="image/png">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../../pages/js/scripts.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand">
    <a class="navbar-brand" href="../../../../index.php"><img alt="Image placeholder" src="../../../../frontend/assets/img/brand/mlab-logo.png" id="navbar-logo"></a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
    ><!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
            <div class="input-group-append">
                <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="http://app.beta/backend/pages/profile-information.php">Profile</a>
                <a class="dropdown-item" href="http://app.beta/backend/pages/profile-settings.php">Settings</a>
                <a class="dropdown-item" href="#">Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="http://app.beta/backend/src/templates/auth/logout/logout.php">Logout</a>
            </div>
        </li>
    </ul>
</nav>
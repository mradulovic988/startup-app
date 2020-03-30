<?php ob_start(); ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">
    <title>App</title>
    <!-- Preloader -->
    <style>
        @keyframes hidePreloader {
            0% {
                width: 100%;
                height: 100%;
            }

            100% {
                width: 0;
                height: 0;
            }
        }

        body>div.preloader {
            position: fixed;
            background: white;
            width: 100%;
            height: 100%;
            z-index: 1071;
            opacity: 0;
            transition: opacity .5s ease;
            overflow: hidden;
            pointer-events: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        body:not(.loaded)>div.preloader {
            opacity: 1;
        }

        body:not(.loaded) {
            overflow: hidden;
        }

        body.loaded>div.preloader {
            animation: hidePreloader .5s linear .5s forwards;
        }
    </style>
    <script>
        window.addEventListener("load", function() {
            setTimeout(function() {
                document.querySelector('body').classList.add('loaded');
            }, 300);
        });
    </script>
    <!-- Favicon -->
    <link rel="icon" href="assets/img/brand/favicon.png" type="image/png"><!-- Font Awesome -->
    <link rel="stylesheet" href="assets/libs/@fortawesome/fontawesome-free/css/all.min.css">
    <!-- Quick CSS -->
    <link rel="stylesheet" href="assets/css/quick-website.css" id="stylesheet">
</head>

<body>
<!-- Preloader -->
<div class="preloader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="modal-cookies" data-backdrop="false" aria-labelledby="modal-cookies" aria-hidden="true">
    <div class="modal-dialog modal-dialog-aside left-4 right-4 bottom-4">
        <div class="modal-content bg-dark-dark">
            <div class="modal-body">
                <!-- Text -->
                <p class="text-sm text-white mb-3">
                    We use cookies so that our themes work for you. By using our website, you agree to our use of cookies.
                </p>
                <!-- Buttons -->
                <a href="pages/utility/terms.html" class="btn btn-sm btn-white" target="_blank">Learn more</a>
                <button type="button" class="btn btn-sm btn-primary mr-2" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<!-- Banner
<a href="https://webpixels.io/themes/quick-website-ui-kit" class="btn btn-block btn-primary text-truncate rounded-0 py-2 d-none d-lg-block" style="z-index: 1000;" target="_blank">
    <strong>Banner</strong> Click here to open the full version →
</a>
-->

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="index.php">
            <img alt="Image placeholder" src="assets/img/brand/mlab-logo.png" id="navbar-logo">
        </a>
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mt-4 mt-lg-0 ml-auto">
                <li class="nav-item ">
                    <a href="about.php" class="nav-link">About us</a>
                </li>
                <li class="nav-item ">
                    <a href="contact.php" class="nav-link">Contact</a>
                </li>

                <?php if (empty($_SESSION['username'])) : ?>
                    <li class="nav-item d-lg-none">
                        <a href="../backend/pages/login.php" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a href="../backend/pages/register.php" class="nav-link">Go Pro</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item d-lg-none">
                        <a href="../backend/pages/index.php" class="nav-link"><?php echo 'Hi, '.$_SESSION['fname']; ?></a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a href="../backend/src/templates/auth/logout/logout.php" class="nav-link">Logout</a>
                    </li>
                <?php endif; ?>

            </ul>
            <!-- Button -->

                <?php if (empty($_SESSION['username'])) : ?>
                    <a class="navbar-btn btn btn-sm btn-primary d-none d-lg-inline-block ml-3" href="../backend/pages/login.php">
                        Login
                    </a>

                    <a class="navbar-btn btn btn-sm btn-warning d-none d-lg-inline-block" href="../backend/pages/register.php">
                        Go PRO
                    </a>
                <?php else : ?>
                    <a class="navbar-btn btn btn-sm btn-primary d-lg-inline-block ml-3" href="../backend/pages/index.php">
                        <?php echo 'Hi, '.$_SESSION['fname']; ?>
                    </a>

                    <a class="navbar-btn btn btn-sm btn-warning d-lg-inline-block" href="../backend/src/templates/auth/logout/logout.php">
                        Logout
                <?php endif; ?>

            <!-- Mobile button -->
            <div class="d-lg-none text-center">
                <a href="https://webpixels.io/themes/quick-website-ui-kit" class="btn btn-block btn-sm btn-warning">See more details</a>
            </div>
        </div>
    </div>
</nav>
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
                <img alt="Image placeholder" src="assets/img/brand/dark.svg" id="navbar-logo">
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
                </ul>
                <!-- Button -->
                <a class="navbar-btn btn btn-sm btn-primary d-none d-lg-inline-block ml-3" href="../backend/pages/login.php">
                    Login
                </a>
                <a class="navbar-btn btn btn-sm btn-warning d-none d-lg-inline-block" href="http://appdev/backend/pages/register.php">
                    Go PRO
                </a>
                <!-- Mobile button -->
                <div class="d-lg-none text-center">
                    <a href="https://webpixels.io/themes/quick-website-ui-kit" class="btn btn-block btn-sm btn-warning">See more details</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <section class="slice py-5">
        <div class="container">
            <div class="row row-grid align-items-center">
                <div class="col-12 col-md-5 col-lg-6 order-md-2">
                    <!-- Image -->
                    <figure class="w-100">
                        <img alt="Image placeholder" src="assets/img/svg/illustrations/illustration-3.svg" class="img-fluid mw-md-120">
                    </figure>
                </div>
                <div class="col-12 col-md-7 col-lg-6 order-md-1 pr-md-5">
                    <!-- Heading -->
                    <h1 class="display-4 text-center text-md-left mb-3">
                        It's time to amplify your <strong class="text-primary">online business</strong>
                    </h1>
                    <!-- Text -->
                    <p class="lead text-center text-md-left text-muted">
                        Build a beautiful, modern website with flexible Bootstrap components built from scratch.
                    </p>
                    <!-- Buttons -->
                    <div class="text-center text-md-left mt-5">
                        <a href="#" class="btn btn-primary btn-icon">
                            <span class="btn-inner--text">Get started</span><span class="btn-inner--icon">
                                <i data-feather="arrow-right"></i>
                            </span>
                        </a>
                        <a href="#" class="btn btn-neutral btn-icon d-none d-lg-inline-block">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg pt-lg-6 pb-0 pb-lg-6">
        <div class="container">
            <!-- Title -->
            <!-- Section title -->
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-lg-6">
                    <span class="badge badge-soft-success badge-pill badge-lg">
                        Get started
                    </span>
                    <h2 class=" mt-4">Carefuly crafted components ready to use in your project</h2>
                    <div class="mt-2">
                        <p class="lead lh-180">Use Atomic Design to build components, sections and, then, pages.</p>
                    </div>
                </div>
            </div>
            <!-- Card -->
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card border-0 bg-soft-danger">
                        <div class="card-body pb-5">
                            <div class="pt-4 pb-5">
                                <img src="assets/img/svg/illustrations/illustration-5.svg" class="img-fluid img-center" style="height: 200px;" alt="Illustration" />
                            </div>
                            <h5 class="h4 lh-130 text-dark mb-3">Unleash you creativity</h5>
                            <p class="text-dark opacity-6 mb-0">Quick Website UI Kit (FREE) contains components and pages that are easy to customize and change.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 bg-soft-success">
                        <div class="card-body pb-5">
                            <div class="pt-4 pb-5">
                                <img src="assets/img/svg/illustrations/illustration-6.svg" class="img-fluid img-center" style="height: 200px;" alt="Illustration" />
                            </div>
                            <h5 class="h4 lh-130 text-dark mb-3">Get more results</h5>
                            <p class="text-dark opacity-6 mb-0">Quick Website UI Kit (FREE) contains components and pages that are easy to customize and change.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 bg-soft-warning">
                        <div class="card-body pb-5">
                            <div class="pt-4 pb-5">
                                <img src="assets/img/svg/illustrations/illustration-7.svg" class="img-fluid img-center" style="height: 200px;" alt="Illustration" />
                            </div>
                            <h5 class="h4 lh-130 text-dark mb-3">Increase your audience</h5>
                            <p class="text-dark opacity-6 mb-0">Quick Website UI Kit (FREE) contains components and pages that are easy to customize and change.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg">
        <div class="container">
            <div class="row row-grid justify-content-around align-items-center">
                <div class="col-lg-6 order-lg-2 ml-lg-auto pl-lg-6">
                    <!-- Heading -->
                    <h5 class="h2 mt-4">We deliver the high quality end results you need</h5>
                    <!-- Text -->
                    <p class="lead lh-190 my-4">
                        With Quick you get components and examples, including tons of variables that will help you customize this theme with ease.
                    </p>
                    <!-- List -->
                    <ul class="list-unstyled">
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape icon-primary icon-sm rounded-circle mr-3">
                                        <i class="fas fa-store-alt"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0">Perfect for modern startups</span>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape icon-warning icon-sm rounded-circle mr-3">
                                        <i class="fas fa-palette"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0">Built with customization and ease-of-use at its core</span>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape icon-success icon-sm rounded-circle mr-3">
                                        <i class="fas fa-cog"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0">Quality design and thoughfully crafted code</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <!-- Image -->
                    <div class="position-relative zindex-100">
                        <img alt="Image placeholder" src="assets/img/svg/illustrations/illustration-2.svg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg bg-section-dark pt-5 pt-lg-8">
        <!-- SVG separator -->
        <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
            <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve" class="">
                <polygon points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <!-- Container -->
        <div class="container position-relative zindex-100">
            <div class="col">
                <div class="row justify-content-center">
                    <div class="col-md-10 text-center">
                        <div class="mt-4 mb-6">
                            <h2 class="h1 text-white">
                                Are you ready to grow faster?
                            </h2>
                            <h4 class="text-white mt-3">Create your own experience</h4>
                            <!-- Play button -->
                            <a href="#" class="btn btn-warning btn-icon hover-translate-y-n10 mt-4">
                                <span class="btn-inner--icon">
                                    <i data-feather="play"></i>
                                </span>
                                <span class="btn-inner--text">Learn more</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice pt-0">
        <div class="container position-relative zindex-100">
            <div class="row">
                <div class="col-xl-4 col-sm-6 mt-n7">
                    <div class="card bg-soft-warning border-0 mb-5 hover-translate-y-n10">
                        <div class="d-flex p-5">
                            <div>
                                <span class="badge badge-warning badge-pill">New</span>
                            </div>
                            <div class="pl-4">
                                <h5 class="lh-130 text-dark">Listen to the nature</h5>
                                <p class="text-dark opacity-6">
                                    Design made simple with a clean and smart HTML markup.
                                </p>
                            </div>
                        </div>
                        <div class="pb-5">
                            <img src="assets/img/svg/illustrations/illustration-7.svg" class="img-fluid img-center" style="height: 200px;" alt="Illustration" />
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 mt-sm-n7">
                    <div class="card bg-soft-success border-0 mb-5 hover-translate-y-n10">
                        <div class="d-flex p-5">
                            <div>
                                <span class="badge badge-success badge-pill">Tips</span>
                            </div>
                            <div class="pl-4">
                                <h5 class="lh-130 text-dark">Rules not to follow</h5>
                                <p class="text-dark opacity-6">
                                    Design made simple with a clean and smart HTML markup.
                                </p>
                            </div>
                        </div>
                        <div class="pb-5">
                            <img src="assets/img/svg/illustrations/illustration-6.svg" class="img-fluid img-center" style="height: 200px;" alt="Illustration" />
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12 col-sm-6 mt-xl-n7">
                    <div class="card bg-soft-danger border-0 mb-5 hover-translate-y-n10">
                        <div class="d-flex p-5 p">
                            <div>
                                <span class="badge badge-danger badge-pill">Update</span>
                            </div>
                            <div class="pl-3">
                                <h5 class="lh-130 text-dark">Beware the water</h5>
                                <p class="text-dark opacity-6">
                                    Design made simple with a clean and smart HTML markup.
                                </p>
                            </div>
                        </div>
                        <div class="pb-5">
                            <img src="assets/img/svg/illustrations/illustration-5.svg" class="img-fluid img-center" style="height: 200px;" alt="Illustration" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <span class="badge badge-primary badge-pill">Key features</span>
                    <h5 class="lh-180 mt-4 mb-6">Quick is a premium HTML template that includes adaptable components and pages for various industries, plus new ones each month.</h5>
                </div>
            </div>
            <!-- Features -->
            <div class="row mx-lg-n4">
                <!-- Features - Col 1 -->
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-warning text-white mr-4">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                            <div>
                                <span class="h6">100% Responsive</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-primary text-white mr-4">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                            <div>
                                <span class="h6">Based on Bootstrap 4</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-danger text-white mr-4">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                            <div>
                                <span class="h6">Built with SASS</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-success text-white mr-4">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                            <div>
                                <span class="h6">300+ components</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-info text-white mr-4">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                            <div>
                                <span class="h6">23+ widgets</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-warning text-white mr-4">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                            <div>
                                <span class="h6">Bootstrap Flexbox Grid</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Features - Col 3 -->
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div>
                                    <div class="icon icon-shape rounded-circle bg-info text-white mr-4">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class="h6">Animate CSS</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div>
                                    <div class="icon icon-shape rounded-circle bg-danger text-white mr-4">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class="h6">Integrated plugins</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div>
                                    <div class="icon icon-shape rounded-circle bg-primary text-white mr-4">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class="h6">Smart HTML markup</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg bg-section-secondary">
        <div class="container text-center">
            <div class="row justify-content-center mt-4">
                <div class="col-lg-8">
                    <!-- Title -->
                    <h2 class="h1 strong-600">
                        Complete features at your hand
                    </h2>
                    <!-- Text -->
                    <p class="lead text-muted">
                        Boomerang is a great free UI package based on Bootstrap 4 that includes the most important components and features so you can jumpstart the hard work and get right to the website creation fast and easy.
                    </p>
                    <!-- Buttons -->
                    <div class="mt-5">
                        <a href="" class="btn btn-lg btn-warning px-4">
                            Download Free
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="position-relative" id="footer-main">
        <div class="footer pt-lg-7 footer-dark bg-dark">
            <!-- SVG shape -->
            <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
                <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve" class=" fill-section-secondary">
                    <polygon points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <!-- Footer -->
            <div class="container pt-4">
                <div class="row">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <!-- Theme's logo -->
                        <a href="index.php">
                            <img alt="Image placeholder" src="assets/img/brand/light.svg" id="footer-logo">
                        </a>
                        <!-- Webpixels' mission -->
                        <p class="mt-4 text-sm opacity-8 pr-lg-4">Webpixels attempts to bring the best development experience to designers and developers by offering the tools needed for having a quick and solid start in most web projects.</p>
                        <!-- Social -->
                        <ul class="nav mt-4">
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="https://dribbble.com/webpixels" target="_blank">
                                    <i class="fab fa-dribbble"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://github.com/webpixels" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.instagram.com/webpixelsofficial" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.facebook.com/webpixels" target="_blank">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
                        <h6 class="heading mb-3">Account</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="#">Billing</a></li>
                            <li><a href="#">Notifications</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                        <h6 class="heading mb-3">About</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                        <h6 class="heading mb-3">Company</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Community</a></li>
                            <li><a href="#">Help center</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </div>
                </div>
                <hr class="divider divider-fade divider-dark my-4">
                <div class="row align-items-center justify-content-md-between pb-4">
                    <div class="col-md-6">
                        <div class="copyright text-sm font-weight-bold text-center text-md-left">
                            &copy; 2020 <a href="https://webpixels.io" class="font-weight-bold" target="_blank">Webpixels</a>. All rights reserved
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Terms
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Privacy
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Cookies
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Core JS  -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/svg-injector/dist/svg-injector.min.js"></script>
    <script src="assets/libs/feather-icons/dist/feather.min.js"></script>
    <!-- Quick JS -->
    <script src="assets/js/quick-website.js"></script>
    <!-- Feather Icons -->
    <script>
        feather.replace({
            'width': '1em',
            'height': '1em'
        })
    </script>
</body>

</html>
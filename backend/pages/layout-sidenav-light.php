<?php include '../src/templates/header/header.php'; ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <?php include '../src/templates/template-parts/navigation/navigation.php'; ?>
                    <?php include '../src/templates/auth/users/user_name.php'; ?>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Sidenav Light</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Sidenav Light</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">This page is an example of using the light side navigation option. By appending the <code>.sb-sidenav-light</code> class to the <code>.sb-sidenav</code> class, the side navigation will take on a light color scheme. The <code>.sb-sidenav-dark</code> is also available for a darker option.</div>
                        </div>
                    </div>
                </main>
                <?php include '../src/templates/footer/footer.php'; ?>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>

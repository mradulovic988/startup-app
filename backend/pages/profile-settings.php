<?php include '../src/templates/header/header.php'; ?>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <?php include '../src/templates/template-parts/navigation.php'; ?>
            <?php include '../src/templates/auth/users/user_name.php'; ?>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Settings</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Settings</li>
                </ol>

                <div class="card mb-4">
                    <div class="card-body">Place where you can manage with all your profile information.</div>
                </div>

                <!-- Additional Information -->
                <div class="card mb-4">
                    <?php include '../src/templates/template-parts/setting-page/additional-profile-information.php'; ?>
                </div>

                <!-- Profile Information -->
                <div class="card mb-4">
                    <?php include '../src/templates/template-parts/setting-page/profile-information.php'; ?>
                </div>

                <!-- Security Information -->
                <div class="card mb-4">
                    <?php include '../src/templates/template-parts/setting-page/security-information.php'; ?>
                </div>

                <!-- Account Information -->
                <div class="card mb-4">
                    <?php include '../src/templates/template-parts/setting-page/account-information.php'; ?>
                </div>
            </div>
        </main>
        <?php include '../src/templates/footer/footer.php'; ?>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/datatables-demo.js"></script>
</body>
</html>

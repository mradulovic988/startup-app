<?php include '../src/templates/header/header.php'; ?>
<?php $function->isAdmin(); ?>
<?php $pendingNum = $db->query('SELECT ads_pending FROM users_ads WHERE ads_pending = ?', 0); ?>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <?php include '../src/templates/template-parts/navigation/navigation.php'; ?>
            <?php include '../src/templates/auth/users/user_name.php'; ?>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Manage Ads</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Manage Ads</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-body">Check all ads</div>
                    <p class="ml-4"><strong>You have <?= $pendingNum->numRows(); ?> pending Ads.</strong></p>
                </div>
                <div class="card mb-4">
                    <?php include '../src/templates/template-parts/ads/all_ads/all_ads.php'; ?>
                </div>
            </div>
        </main>
        <?php include '../src/templates/footer/footer.php'; ?>
    </div>
</div>

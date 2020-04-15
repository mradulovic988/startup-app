<div class="sb-sidenav-menu">
    <div class="nav">
        <div class="sb-sidenav-menu-heading">Core</div>
        <a class="nav-link" href="/backend/pages/index.php">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Dashboard</a>
        <a class="nav-link" href="http://app.beta/frontend/index.php" target="_blank">
            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
            View Site</a>

        <?php
        // Show only if the user role is Administrator
        if ($_SESSION['user_role'] === 10) : ?>

            <div class="sb-sidenav-menu-heading">Admin</div>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-users-cog"></i></div>
                Users
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseUsers" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="/backend/pages/all_users.php">All Users</a>
                </nav>
            </div>

        <?php endif; ?>

        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAds" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-bullhorn"></i></div>
            Ads
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="collapseAds" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="/backend/pages/new_ads.php">Create New Ads</a>
                <a class="nav-link" href="#">Your Ads</a>

                <?php if ($_SESSION['user_role'] === 10) : ?>
                    <a class="nav-link" href="#">All Ads</a>
                    <a class="nav-link" href="#">Memberships</a>
                <?php endif; ?>

            </nav>
        </div>

        <div class="sb-sidenav-menu-heading">Interface</div>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
            Events
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="#">All Events</a>
                <a class="nav-link" href="#">Add New Event</a>
                <a class="nav-link" href="#">Manage Events</a>
            </nav>
        </div>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
            Pages
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">Authentication
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                    ></a>
                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                    <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="login.php">Login</a><a class="nav-link" href="register.php">Register</a><a class="nav-link" href="password.php">Forgot Password</a></nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">Error
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                    ></a>
                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                    <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="401.php">401 Page</a><a class="nav-link" href="404.php">404 Page</a><a class="nav-link" href="500.php">500 Page</a></nav>
                </div>
            </nav>
        </div>
        <div class="sb-sidenav-menu-heading">Addons</div>
        <a class="nav-link" href="charts.php">
            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
            Charts</a>
        <a class="nav-link" href="tables.php">
            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
            Tables</a>
    </div>
</div>
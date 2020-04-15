<?php include '../src/templates/header/header.php'; ?>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <?php include '../src/templates/template-parts/navigation/navigation.php'; ?>
            <?php include '../src/templates/auth/users/user_name.php'; ?>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <!-- Here add the code -->
            <div class="container-fluid">
                <h4 class="mt-4"><?php echo 'Welcome back '.$_SESSION['fname']; ?></h4>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Home</li>
                </ol>

                <div class="card mb-4">
                    <div class="card-body">You can manage your data here.</div>
                </div>

                <!-- Profile Information -->
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-table mr-1"></i>Information</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <!-- Add data here -->

                        </div>
                    </div>
                </div>



            </div>




        </main>

        <?php include '../src/templates/footer/footer.php'; ?>

    </div>
</div>
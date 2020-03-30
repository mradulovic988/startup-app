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
                            Add data here
                        </div>
                    </div>
                </div>



            </div>




        </main>

        <?php include '../src/templates/footer/footer.php'; ?>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/datatables-demo.js"></script>
</body>

</html>
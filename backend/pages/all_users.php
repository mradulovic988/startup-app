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
			<div class="container-fluid">
				<h1 class="mt-4">All Users</h1>
				<ol class="breadcrumb mb-4">
					<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
					<li class="breadcrumb-item active">All Users</li>
				</ol>
				<div class="card mb-4">
					<div class="card-body">You can see here all of the users</div>
				</div>
				<div class="card mb-4">
					<div class="card-header"><i class="fas fa-table mr-1"></i>Users</div>
					<div class="card-body">
						<div class="table-responsive">
							<?php include '../src/templates/template-parts/admin_area/all_users/all_users.php'; ?>
						</div>
					</div>
				</div>
			</div>
		</main>
		<?php include '../src/templates/footer/footer.php'; ?>
    </div>
</div>
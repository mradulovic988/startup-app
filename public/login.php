<?php include '../src/templates/header/auth_header.php'; ?>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data">

                                <?php include '../src/templates/auth/errors.php'; ?>
                                <?php include '../src/templates/auth/login/login.php'; ?>

                                <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Username</label><input class="form-control py-4" id="inputEmailAddress" type="text" name="username" placeholder="Enter username" /></div>
                                <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Enter password" /></div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox"><input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" /><label class="custom-control-label" for="rememberPasswordCheck">Remember password</label></div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="password.php">Forgot Password?</a><input type="submit" class="btn btn-primary" value="Login" name="login_user"></div>
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include '../src/templates/footer/auth_footer.php'; ?>
<?php include '../src/templates/header/auth_header.php'; ?>
<?php include '../src/templates/auth/password-recovery/forget_password.php'; ?>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Password Recovery</h3></div>
                        <div class="card-body">
                            <div class="small mb-3 text-muted">Enter your email address and we will send you a link to reset your password.</div>
                            <form method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                                    <input type="email" class="form-control py-4" id="inputEmailAddress" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email address" />
                                </div>

                                <div class="form-group">
                                    <label class="small mb-1" for="recoveryUsername">Username</label>
                                    <input type="text" class="form-control py-4" id="recoveryUsername" type="email" name="username" placeholder="Enter your Username" />
                                </div>

                                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <a class="small" href="login.php">Return to login</a>
                                    <input type="submit" name="recoveryPassword" class="btn btn-primary" value="Reset Password">
                                </div>
                                <?php if (!empty($error)) { echo $error; } ?>
                                <?php if (!empty($recoverySuccessMsg)) { echo $recoverySuccessMsg; } ?>
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
<?php include '../src/templates/footer/auth_footer.php'; ?>
<?php include '../src/templates/header/auth_header.php'; ?>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                        <div class="card-body">

                            <?php include '../src/templates/auth/register/registration.php'; ?>
                            <?php include '../src/templates/auth/errors.php'; ?>

                            <form method="post" enctype="multipart/form-data">

                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="small mb-1" for="inputFirstName">First Name</label><input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter first name" name="fname" /></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="small mb-1" for="inputLastName">Last Name</label><input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter last name" name="lname" /></div>
                                    </div>
                                </div>

                                <div class="form-group"><label class="small mb-1" for="inputUsername">Username</label><input class="form-control py-4" id="inputUsername" type="text" aria-describedby="usernameHelp" placeholder="Enter Username" name="username" value="<?php echo $username; ?>" /></div>

                                <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="email" value="<?php echo $email; ?>" /></div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password" /></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Confirm Password</label><input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" name="password_confirm" /></div>
                                    </div>
                                </div>
                                <div class="form-group mt-4 mb-0">
                                    <input type="submit" name="create_user" class="btn btn-primary btn-block" value="Create Account">
                                </div>

                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <div class="small"><a href="http://appdev/backend/public/login.php">Have an account? Go to login</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include '../src/templates/footer/auth_footer.php'; ?>
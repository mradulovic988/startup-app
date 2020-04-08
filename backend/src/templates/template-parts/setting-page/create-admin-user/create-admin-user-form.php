<?php include 'create-admin-user.php'; ?>

<div class="card-header"><i class="fas fa-table mr-1"></i>Create New Admin User</div>
<div class="card-body">
    <div class="table-responsive">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 mb-5">
                    <div class="border-0 rounded-lg mt-5">
                        <form class="md-form" method="post" enctype="multipart/form-data">

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputFirstName">First Name</label>
                                        <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter first name" name="fname" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputLastName">Last Name</label>
                                        <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter last name" name="lname" required />
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label class="small mb-1" for="inputUsername">Username</label>
                                    <input class="form-control py-4" id="inputUsername" type="text" aria-describedby="usernameHelp" placeholder="Enter Username" name="username" required />
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                                    <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="email" required />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label class="small mb-1" for="inputPassword">Password</label>
                                    <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password" required />
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                    <input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" name="password_confirm" required />
                                </div>
                            </div>

                            <input type="hidden" name="user_role_admin" value="10"/>

                            <div class="form-row mt-4 mb-0">
                                <input type="submit" name="create_user_admin" class="btn btn-primary btn-block" value="Create Account">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                <h1 class="mt-4">Profile Information</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Profile Information</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-body">Place where you can manage with all your additional profile information.</div>
                </div>

                <!-- Profile Information -->
                <div class="card mb-4">

                    <!-- Here comes the code -->

                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 mb-5">
                                <div class="border-0 rounded-lg mt-5">
                                    <form class="md-form" method="post" enctype="multipart/form-data">

                                        <?php include '../src/templates/auth/errors.php'; ?>
                                        <?php include '../src/templates/auth/login/login.php'; ?>

                                        <div class="container">
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type='file' name="imageUpload" id="imageUpload" accept=".png, .jpg, .jpeg" required />
                                                    <label for="imageUpload"></label>
                                                </div>
                                                <div class="avatar-preview">
                                                    <div id="imagePreview" style="background-image: url('../pages/assets/img/brands/avatar.png');">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h3 class="text-center font-weight-light">Customize your intro</h3>
                                        <small id="username" class="text-center form-text text-muted mb-5">Details that you select will be public and will be visible to all users.</small>

                                        <div class="form-row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input class="form-control py-4 bottom-border" id="work" type="text" name="work" placeholder="Work" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input class="form-control py-4 bottom-border" id="education" type="text" name="education" placeholder="Education" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input class="form-control py-4 bottom-border" id="phoneNumber" type="tel" name="phoneNumber" placeholder="Phone Number" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input class="form-control py-4 bottom-border" id="state" type="text" name="state" placeholder="State" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input class="form-control py-4 bottom-border" id="currentCity" type="text" name="currentCity" placeholder="Current City" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input class="form-control py-4 bottom-border" id="homeTown" type="text" name="homeTown" placeholder="Home Town" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">

                                            <div class="col-md-4">
                                                <select class="form-control form-control-lg bottom-border" id="relationshipStatus" name="relationshipStatus">
                                                    <option disabled selected>Relationship Status</option>
                                                    <option value="Single">Single</option>
                                                    <option value="In a Relatioship">In a Relatioship</option>
                                                    <option value="Engaged">Engaged</option>
                                                    <option value="Married">Married</option>
                                                    <option value="In a civil partnership">In a civil partnership</option>
                                                    <option value="In a civil partnership">In a civil partnership</option>
                                                    <option value="In a domestic partnership">In a domestic partnership</option>
                                                    <option value="In a open relationship">In a open relationship</option>
                                                    <option value="It's complicated">It's complicated</option>
                                                    <option value="Separated">Separated</option>
                                                    <option value="Divorced">Divorced</option>
                                                    <option value="Widowed">Widowed</option>
                                                </select>
                                            </div>

                                            <div class="col-md-4">
                                                <select class="form-control form-control-lg bottom-border" id="gender" name="gender">
                                                    <option disabled selected>Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Custom">Custom</option>
                                                    <option value="Prefer not to say">Prefer not to say</option>
                                                </select>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input class="form-control py-4 bottom-border" id="hobbies" type="text" name="hobbies" placeholder="Hobbies" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input class="form-control py-4 bottom-border" id="website" type="text" name="website" placeholder="Website" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input class="form-control py-4 bottom-border" id="company" type="text" name="company" placeholder="Company" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input class="form-control py-4 bottom-border" id="position" type="text" name="position" placeholder="Position" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input class="form-control py-4 bottom-border" id="bio" type="text" name="bio" placeholder="Write something about you" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <input type="submit" class="btn btn-primary" value="Save" name="additionalSubmit">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php include '../src/templates/template-parts/setting-page/additional-profile-information.php'; ?>
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
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });
</script>
</body>
</html>

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
    <h1 class="mt-4">Create New Ads</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item active">Create New Ads</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body"></div>
    </div>

    <!-- Profile Information -->
    <div class="card mb-4">

        <!-- Here comes the code -->

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 mb-5">
                    <div class="border-0 rounded-lg mt-5">
                        <form class="md-form" method="post" enctype="multipart/form-data">

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

                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control py-4 bottom-border" id="work" type="text" name="work" placeholder="Work" required/>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control py-4 bottom-border" id="education" type="text" name="education" placeholder="Education" required />
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
                                    <select class="form-control form-control-lg bottom-border" id="relationshipStatus" name="relationshipStatus[]" required>
                                        <option value=""></option>
                                        <option value="Single">Single</option>
                                        <option value="In a Relatioship">In a Relatioship</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <select class="form-control form-control-lg bottom-border" id="gender" name="gender[]" required>
                                        <option value=""></option>
                                        <option value="Male">Male</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control py-4 bottom-border" id="hobbies" type="text" name="hobbies" placeholder="Hobbies" required />
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control bottom-border" name="bio" rows="3" placeholder="Write something about you..." required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save" name="additionalSubmit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
    </main>
<?php include '../src/templates/footer/footer.php'; ?>
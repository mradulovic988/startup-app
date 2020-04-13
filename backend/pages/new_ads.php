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

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control py-4 bottom-border" id="ads_name" type="text" name="ads_name" placeholder="Title" required />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control py-4 bottom-border" id="ads_phone" type="text" name="ads_phone" placeholder="Phone" required/>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control py-4 bottom-border" id="ads_price" type="text" name="ads_price" placeholder="Price" required/>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control py-4 bottom-border" id="ads_location" type="text" name="ads_location" placeholder="Location" required />
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control form-control-lg bottom-border" id="ads_category" name="ads_category[]" required>
                                                    <option value="">Choose category</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Test">Test</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control form-control-lg bottom-border" id="ads_plan" name="ads_plan[]" required>
                                                    <option value="">Choose plan</option>
                                                    <option value="Free">Free</option>
                                                    <option value="Basic">Basic</option>
                                                    <option value="Premium">Premium</option>
                                                    <option value="Delux">Delux</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="form-control bottom-border" name="ads_description" rows="7" placeholder="Add description..." required></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="file" name="ads_image">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save" name="newAdsSubmit">
                                    </div>
                                </form>
                                <?php include '../src/templates/template-parts/ads/new_ads/new_ads_insert.php'; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
<?php include '../src/templates/footer/footer.php'; ?>
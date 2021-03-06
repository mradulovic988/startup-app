<?php
$username = $_SESSION['username'];

$selectAddProfile = $db->query('SELECT profile_image, work, education, phone_number, state, current_city, home_town, relationship_status, gender, hobbies, website, company, position, bio FROM users WHERE username = ?', $username)->fetchAll();

foreach ($selectAddProfile as $profile) { // Start database foread ?>

<div class="container-fluid">
    <h1 class="mt-4"><?= Localization::localizationString('profile_information') ?></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="../../../../../../index.php"><?= Localization::localizationString('dashboard_breadcrumb') ?></a></li>
        <li class="breadcrumb-item active"><?= Localization::localizationString('profile_information_breadcrumb');?></li>
    </ol>
    <div class="card mb-4">
        <div class="card-body"><?= Localization::localizationString('info_additional_information') ?></div>
    </div>

    <!-- Profile Information -->
    <div class="card mb-4">

        <!-- Here comes the code -->

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 mb-5">
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
                                        <div id="imagePreview" style="background-image: url('<?= $function->selectQuery('../pages/assets/img/uploaded_image/', $profile, 'profile_image', '../pages/assets/img/brands/avatar.png') ?>');">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3 class="text-center font-weight-normal">Hi, <?= $_SESSION['fname'] ?></h3>
                            <h3 class="text-center font-weight-light"><?= Localization::localizationString ( 'customize' ); ?></h3>
                            <small id="username" class="text-center form-text text-muted mb-5"><?= Localization::localizationString ( 'detail_user' ); ?></small>

                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control py-4 bottom-border" id="work" type="text" name="work" placeholder="<?= $function->selectQuery('', $profile, 'work', 'Work') ?>" required/>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control py-4 bottom-border" id="education" type="text" name="education" placeholder="<?= $function->selectQuery('', $profile, 'education', 'Education') ?>" required />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control py-4 bottom-border" id="phoneNumber" type="tel" name="phoneNumber" placeholder="<?= $function->selectQuery('', $profile, 'phone_number', 'Phone Number') ?>" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control py-4 bottom-border" id="state" type="text" name="state" placeholder="<?= $function->selectQuery('', $profile, 'state', 'State') ?>" required />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control py-4 bottom-border" id="currentCity" type="text" name="currentCity" placeholder="<?= $function->selectQuery('', $profile, 'current_city', 'Current City') ?>" required />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control py-4 bottom-border" id="homeTown" type="text" name="homeTown" placeholder="<?= $function->selectQuery('', $profile, 'home_town', 'Home Town') ?>"  required/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">

                                <div class="col-md-4">
                                    <select class="form-control form-control-lg bottom-border" id="relationshipStatus" name="relationshipStatus[]" required>
                                        <option value=""><?= $function->selectQuery('', $profile, 'relationship_status', Localization::localizationString('relationship_status')); ?></option>
                                        <option value="Single"><?= Localization::localizationString('single'); ?></option>
                                        <option value="In a Relatioship"><?= Localization::localizationString('in_relationship'); ?></option>
                                        <option value="Engaged"><?= Localization::localizationString('engaded'); ?></option>
                                        <option value="Married"><?= Localization::localizationString('married'); ?></option>
                                        <option value="In a civil partnership"><?= Localization::localizationString('civil_partnership'); ?></option>
                                        <option value="In a domestic partnership"><?= Localization::localizationString('domestic_partnership'); ?></option>
                                        <option value="In a open relationship"><?= Localization::localizationString('open_partnership'); ?></option>
                                        <option value="It's complicated"><?= Localization::localizationString('complicated'); ?></option>
                                        <option value="Separated"><?= Localization::localizationString('separated'); ?></option>
                                        <option value="Divorced"><?= Localization::localizationString('divorced'); ?></option>
                                        <option value="Widowed"><?= Localization::localizationString('widowed'); ?></option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <select class="form-control form-control-lg bottom-border" id="gender" name="gender[]" required>
                                        <option value=""><?= $function->selectQuery('', $profile, 'gender', Localization::localizationString('gender')); ?></option>
                                        <option value="Male"><?= Localization::localizationString('male'); ?></option>
                                        <option value="Female"><?= Localization::localizationString('female'); ?></option>
                                        <option value="Custom"><?= Localization::localizationString('custom'); ?></option>
                                        <option value="Prefer not to say"><?= Localization::localizationString('not_to_say'); ?></option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control py-4 bottom-border" id="hobbies" type="text" name="hobbies" placeholder="<?= $function->selectQuery('', $profile, 'hobbies', 'Hobbies') ?>" required />
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control py-4 bottom-border" id="website" type="text" name="website" placeholder="<?= $function->selectQuery('', $profile, 'website', 'Website') ?>" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control py-4 bottom-border" id="company" type="text" name="company" placeholder="<?= $function->selectQuery('', $profile, 'company', 'Company') ?>" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control py-4 bottom-border" id="position" type="text" name="position" placeholder="<?= $function->selectQuery('', $profile, 'position', 'Position') ?>" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control bottom-border" name="bio" rows="3" placeholder="<?= $function->selectQuery('', $profile, 'bio', 'Write something about you...') ?>" required></textarea>
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

<?php } // End foreach loops for database query ?>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
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
<?php
$aboutSelect = $db->query('SELECT profile_image, fname, lname, work, company FROM users ORDER BY id DESC LIMIT 8')->fetchAll();

foreach ($aboutSelect as $about) : ?>

    <div class="col-lg-3 col-sm-6 mb-5">
        <div data-animate-hover="2">
            <div class="animate-this">
                <a href="#">
                    <img alt="Image placeholder" class="img-fluid rounded shadow img-fluid-custom custom" src="<?= $function->selectQuery('../../backend/pages/assets/img/uploaded_image/', $about, 'profile_image', '../../backend/pages/assets/img/brands/avatar.png') ?>">
                </a>
            </div>
            <div class="mt-3">
                <h5 class="h6 mb-0"><?= $about['fname'].' '.$about['lname'] ?></h5>
                <p class="text-muted text-sm mb-0"><?php if(!empty($about['work'] || $about['company'])) {echo $about['work'].', '.$about['company']; } else { echo 'User prefer privacy'; } ?></p>
            </div>
        </div>
    </div>

<?php endforeach; ?>

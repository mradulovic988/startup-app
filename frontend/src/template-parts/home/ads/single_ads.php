<?php

if (isset($_GET['id'])) {
    $single_ads = $_GET['id'];
}

$singleAds = $db->query('SELECT * FROM users_ads WHERE id = ?', $single_ads)->fetchArray();

//$singleAds = $db->query('SELECT * FROM users_ads INNER JOIN users ON users_ads.user_id = users.id WHERE users_ads.id = ?', $single_ads)->fetchArray(); ?>

<?php
// Only admin role can see live pending ads
if ($singleAds['ads_pending'] === 0 && $_SESSION['user_role'] !== 10) $function->redirect('http://app.beta/backend/pages/your_ads.php'); ?>

<div class="card">
    <img class="card-img-top img-fluid" src="../backend/pages/assets/img/ads_uploaded_image/<?= $singleAds['ads_image'] ?>" alt="">
    <div class="card-body">
        <h3 class="card-title"><?= $singleAds['ads_name'] ?></h3>
        <h4>Price: <?= $singleAds['ads_price'] ?></h4>
        <p class="card-text-custom"><?= $singleAds['ads_description'] ?></p>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-6"><strong>Category: </strong><?= $singleAds['ads_category'] ?></div>
            <div class="col-md-6"><strong>Location: </strong><?= $singleAds['ads_location'] ?></div>
        </div>

        <div class="row">
            <div class="col-md-6"><strong>Phone: </strong><span class="phone_change">See number</span></div>
            <div class="col-md-6"><strong>Plan: </strong><?= $singleAds['ads_plan'] ?></div>
<!--            <div class="col-md-6"><strong>Email: </strong>--><?//= $singleAdstest['email'] ?><!--</div>-->
        </div>

        <div class="row">
            <div class="col-md-6"><strong><a href="http://app.beta/frontend/single_user_profile.php?user_id=<?= $singleAds['user_id'] ?>">More from this user</a></strong></div>
        </div>
    </div>
</div>
<!-- /.card -->

<div class="card">
    <div class="card-body">
        <h3 class="card-title">Contact</h3>
        <?php include 'single_ads_contact.php'; ?>
    </div>
</div>
<!-- /.card -->

<div class="card">
    <div class="card-body">
        <h3 class="card-title">Comments</h3>
    </div>
</div>
<!-- /.card -->
<script>
    $('.phone_change').click(function(){
        var $this = $(this);
        $this.toggleClass('phone_change');
        if($this.hasClass('phone_change')){
            $this.text('See number');
        } else {
            $this.text("<?= $singleAds['ads_phone'] ?>");
        }
    });
</script>
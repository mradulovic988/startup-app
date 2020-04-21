<?php
$session_id = $_SESSION['id'];
$yourAds = $db->query('SELECT * FROM users_ads WHERE user_id = ? ORDER BY id DESC', $session_id)->fetchAll();
//$yourAds = $db->query('SELECT * FROM users_ads INNER JOIN users ON users_ads.user_id = users.id WHERE users_ads.user_id = ? ORDER BY users_ads.id DESC', $session_id)->fetchAll();


?>

<div class="row m-5">
    <?php foreach ($yourAds as $ad) : ?>

    <div class="col-lg-4 mb-4 content">

    <?php $checkPending = ($ad['ads_pending'] === 1) ?
        '<div class="card custom">' :
        '<p class="pending_custom_user">PENDING</p><p class="pending_notify_custom_user">Once when the ad is approved, you will be notified by email.</p><div style="filter: blur(7px);" class="card custom">';
    echo $checkPending; ?>

        <img class="card-img-top custom-size" src="../pages/assets/img/ads_uploaded_image/<?= $ad['ads_image'] ?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title custom"><?= $ad['ads_name'] ?></h5>
            <p class="card-text custom"><?= $function->getExcerpt($ad['ads_description'], '0', '50') ?></p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item custom"><b>Category:</b> <?= $ad['ads_category'] ?></li>
            <li class="list-group-item custom"><b>Price:</b> <?= $ad['ads_price'] ?></li>
            <li class="list-group-item custom"><b>Location:</b> <?= $ad['ads_location'] ?></li>
            <li class="list-group-item custom"><b>Phone:</b> <?= $ad['ads_phone'] ?></li>
            <li class="list-group-item custom"><b>Plan:</b> <?= $ad['ads_plan'] ?></li>
            <li class="list-group-item custom"><b>Ad published on:</b> <?= $ad['ads_start_date'] ?></li>
            <li class="list-group-item custom"><b>Ad ends on:</b> <?= $ad['ads_end_date'] ?></li>
<!--            <li class="list-group-item custom"><b>Email:</b> --><?//= $ad['email'] ?><!--</li>-->
        </ul>
        <div style="display: block" class="card-body">
            <span style="text-decoration: underline; cursor: pointer" class="card-link editBtn text-info" data-toggle="modal" data-target="#edit_ads">Edit</span>
            <input type="hidden" name="edit_id" value="<?= $ad['id'] ?>" class="edit_id">

            <span style="float: right; text-decoration: underline; cursor: pointer" class="card-link declineBtn text-info" data-toggle="modal" data-target="#decline_ads">Decline</span>
            <input type="hidden" name="decline_id" value="<?= $ad['id'] ?>" class="decline_id">
        </div>
        <div style="display: block" class="card-body">
            <a href="/frontend/single_ads.php?id=<?= $ad['id']; ?>" target="_blank">
                <button type="button" class="btn btn-outline-primary w-100">View Live</button>
            </a>
        </div>
    </div>
</div>
<?php endforeach; ?>
</div>
<button style="margin-bottom: 30px!important;" type="button" id="loadMore" class="btn btn-outline-primary w-25 m-0 m-auto">Load More</button>
<script>
    $(document).ready(function(){
        $(".content").slice(0, 3).show();
        $("#loadMore").on("click", function(e){
            e.preventDefault();
            $(".content:hidden").slice(0, 3).slideDown();
            if($(".content:hidden").length == 0) {
                $("#loadMore").text("No More Ads").addClass("noContent");
            }
        });
    })
</script>
<?php include 'C:\xampp\htdocs\app\backend\src\templates\template-parts\ads\all_ads\decline\decline_ads.php'; ?>
<?php include 'C:\xampp\htdocs\app\backend\src\templates\template-parts\ads\all_ads\edit\edit_ads_form.php'; ?>
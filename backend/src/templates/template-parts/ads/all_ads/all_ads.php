<?php $allAds = $db->query('SELECT * FROM users_ads ORDER BY id AND ads_pending = ? DESC', 0)->fetchAll(); ?>

<div class="row m-5">
    <?php foreach ($allAds as $ad) : ?>
        <div class="col-lg-4 mb-4 content">
            <div class="card custom">
                <?php
                if ($ad['ads_pending'] === 0) : ?>
                    <p class="pending_custom">PENDING</p>
                <?php endif; ?>
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
                </ul>
                <div style="display: flex" class="card-body">
                    <div class="col-sm-4">
                        <span style="cursor:pointer;" class="card-link editBtn text-info" data-toggle="modal" data-target="#edit_ads"><b>Edit</b></span>
                        <input type="hidden" name="edit_id" value="<?= $ad['id'] ?>" class="edit_id">
                    </div>
                    <div class="col-sm-4">
                        <span style="cursor:pointer;" class="card-link declineBtn text-info" data-toggle="modal" data-target="#decline_ads"><b>Decline</b></span>
                        <input type="hidden" name="decline_id" value="<?= $ad['id'] ?>" class="decline_id">
                    </div>
                    <div class="col-sm-4">
                        <span style="cursor:pointer;" class="card-link approveBtn text-info" data-toggle="modal" data-target="#approve_ads"><b>Approve</b></span>
                        <input type="hidden" name="approve_id" value="<?= $ad['id'] ?>" class="approve_id">
                    </div>
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
<?php include 'approve/approve_ads.php'; ?>
<?php include 'decline/decline_ads.php'; ?>
<?php include 'edit/edit_ads_form.php'; ?>
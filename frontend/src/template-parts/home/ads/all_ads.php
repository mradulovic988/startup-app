<?php $allAds = $db->query('SELECT * FROM users_ads WHERE ads_pending = ? ORDER BY id DESC', 1)->fetchAll();
//$allAds = $db->query('SELECT * FROM users_ads INNER JOIN users ON users_ads.user_id = users.id WHERE users_ads.ads_pending = ? ORDER BY users_ads.id DESC', 1)->fetchAll();
?>

<div class="row mt-4">
    <?php foreach ($allAds as $ad) { ?>
        <div class="col-lg-3 col-md-6 mb-4 content">
            <div class="card h-100">
                <a href="single_ads.php?id=<?= $ad['id']; ?>"><img class="card-img-top" src="../backend/pages/assets/img/ads_uploaded_image/<?= $ad['ads_image'] ?>" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="single_ads.php?id=<?= $ad['id']; ?>"><?= $function->getExcerpt($ad['ads_name'], '0', '40') ?></a>
                    </h4>
                    <h5>Price: <?= $ad['ads_price'] ?></h5>
                    <p class="card-text"><?= $function->getExcerpt($ad['ads_description'], '0', '100') ?></p>

                    <div class="row">
                        <div class="col-md-6"><small><strong>Category: </strong><?= $ad['ads_category'] ?></small></div>
                        <div class="col-md-6"><small><strong>Location: </strong><?= $ad['ads_location'] ?></small></div>
                    </div>

                    <div class="row">
                        <div class="col-md-6"><small><strong>Phone: </strong><?= $ad['ads_phone'] ?></small></div>
                        <div class="col-md-6"><small><strong>Plan: </strong><?= $ad['ads_plan'] ?></small></div>
<!--                        <div class="col-md-6"><small><strong>Email: </strong>--><?//= $ad['email'] ?><!--</small></div>-->
                    </div>
                </div>
                <div class="card-footer">
                    <small class="text-muted"><a href="single_ads.php?id=<?= $ad['id']; ?>">Read More</a></small>
                </div>
            </div>
        </div>

    <?php } ?>

</div>
<button style="margin-bottom: 30px!important;" type="button" id="loadMore" class="btn btn-outline-primary custom">Load More</button>

<script>
    $(document).ready(function(){
        $(".content").slice(0, 4).show();
        $("#loadMore").on("click", function(e){
            e.preventDefault();
            $(".content:hidden").slice(0, 4).slideDown();
            if($(".content:hidden").length == 0) {
                $("#loadMore").text("No More Ads").addClass("noContent");
            }
        });
    })
</script>

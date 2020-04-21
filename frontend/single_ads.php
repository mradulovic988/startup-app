<?php
include 'src/header/header.php';

if (isset($_GET['id'])) {
    $single_ads = $_GET['id'];
}

$singleAds = $db->query('SELECT * FROM users_ads WHERE id = ?', $single_ads)->fetchArray(); ?>

<div class="container">

    <div class="row">

        <div class="col-lg-3">
            <?php include 'src/template-parts/sidebar/sidebar.php'; ?>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9 mt-4">

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
                    </div>
                </div>
            </div>
            <!-- /.card -->

            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Contact</h3>
                </div>
            </div>
            <!-- /.card -->

            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Comments</h3>
                </div>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->

    </div>

</div>
<!-- /.container -->
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
<?php include 'src/footer/footer.php';
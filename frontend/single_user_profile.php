<?php
include 'src/header/header.php';

if (isset($_GET['user_id'])) {
    $single_user = $_GET['user_id'];
}

$singleUser = $db->query('SELECT * FROM users_ads WHERE user_id = ? AND ads_pending = ? ORDER BY id DESC', $single_user, 1)->fetchAll();
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <table class="table">
                <thead>
                <tr class="single-user-tr">
                    <th></th>
                    <th>All user ads</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Ad ends</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                foreach ($singleUser as $user) : ?>
                    <tr class="content">
                        <th><?= $i++ ?></th>
                        <td><a href="single_ads.php?id=<?= $user['id']; ?>"><?= $function->getExcerpt($user['ads_name'], 0, 60) ?></a></td>
                        <td><?= $user['ads_category'] ?></td>
                        <td><?= $user['ads_price'] ?></td>
                        <td><?= $user['ads_end_date'] ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
<!--            <button style="margin-bottom: 30px!important;" type="button" id="loadMoreSingleUser" class="btn btn-outline-primary w-25 m-0 m-auto">Load More</button>-->
            <a id="loadMoreSingleUser" class="ml-3 mb-3 btn btn-outline-primary btn-sm" href="#">Load More</a>

        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $(".content").slice(0, 5).show();
        $("#loadMoreSingleUser").on("click", function(e){
            e.preventDefault();
            $(".content:hidden").slice(0, 5).slideDown();
            if($(".content:hidden").length == 0) {
                $("#loadMoreSingleUser").text("No More Ads").addClass("noContent");
            }
        });
    })
</script>

<?php include 'src/footer/footer.php';
<div class="modal fade" id="decline_ads" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Decline ad</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">

                    <div class="modal-body">
                        <p>Are you sure that you want to decline this ad?</p>
                        <input type="hidden" id="dbDeclineId" name="dbDeclineId">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" name="declineAd" class="btn btn-primary btn-sm">Decline</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $('.declineBtn').on('click', function(e) {
        let declineId = $(e.target).closest('div').find('.decline_id').val();
        $("#dbDeclineId").val(declineId);
    });
</script>
<?php
if (isset($_POST['declineAd'])) {
    $dbDeclineId = $_POST['dbDeclineId'];
    $declineAd = $db->query('DELETE FROM users_ads WHERE id = ?', $dbDeclineId);
    $function->redirect($_SERVER['REQUEST_URI']);
}
?>
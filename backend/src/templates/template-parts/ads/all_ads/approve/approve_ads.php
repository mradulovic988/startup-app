<div class="modal fade" id="approve_ads" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Approve ad</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">

                    <div class="modal-body">
                        <p>Are you sure that you want to approve this ad?</p>
                        <input type="hidden" id="dbApproveId" name="dbApproveId">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" name="approveAd" class="btn btn-primary btn-sm">Approve</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $('.approveBtn').on('click', function(e) {
        let approveId = $(e.target).closest('div').find('.approve_id').val();
        $("#dbApproveId").val(approveId);
    });
</script>
<?php
if (isset($_POST['approveAd'])) {
    $dbApproveId = $_POST['dbApproveId'];
    $approve = $db->query('UPDATE users_ads SET ads_pending = ? WHERE id = ?', '1', $dbApproveId);
}
?>
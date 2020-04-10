<?php $userRoleSelect = $db->query('SELECT user_role FROM users')->fetchArray(); ?>
<?php include 'user_role_update.php'; ?>

<div class="modal fade" id="upgradeUserRole" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Upgrade user role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <p>Are you sure that you want to upgrade in the Admin role?</p>
                        <input type="hidden" id="fromDbId" name="fromDbId">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Back</button>

                        <button type="submit" id="updatePass" name="updateUserRole" class="btn btn-danger btn-sm">Upgrade to admin</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $('.upgradeBtn').on('click', function(e) {
        let copyUpgradeId = $(e.target).closest('tr').find('.db_upgrade_id').val();
        $("#fromDbId").val(copyUpgradeId);
    });
</script>
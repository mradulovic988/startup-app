<?php include 'user_role_delete.php'; ?>
<div class="modal fade" id="deleteUserRole" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Delete user</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <p>Are you sure that you want to delete the user?</p>
                        <input type="hidden" id="fromDbDeleteId" name="fromDbDeleteId">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Back</button>
                        <button type="submit" id="updatePass" name="deleteUserRole" class="btn btn-danger btn-sm">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('.deleteBtn').on('click', function(e) {
        let copyDeleteId = $(e.target).closest('tr').find('.db_delete_id').val();
        $("#fromDbDeleteId").val(copyDeleteId);
    });
</script>
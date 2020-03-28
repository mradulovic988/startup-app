<?php
if (isset($_POST['deleteAccount'])) {

    $delete_account = $connection->prepare("DELETE FROM users WHERE id = ?");
    $delete_account->bind_param("i", $_SESSION['id']);
    $delete_account->execute();

    $function->redirect('http://appdev/frontend/index.php');

    $delete_account->close();
}
?>

<div class="card-header"><i class="fas fa-table mr-1"></i>Account Information</div>
<div class="card-body">
    <div class="table-responsive">
        <button type="button" class="btn btn-danger btn-sm mt-2" name="genPass" data-toggle="modal" data-target="#accountInformation">Delete Account</button>
    </div>
</div>

<div class="modal fade" id="accountInformation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Are you sure?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Back</button>
                        <button type="submit" id="updatePass" name="deleteAccount" class="btn btn-danger btn-sm">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
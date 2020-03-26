<div class="card-header"><i class="fas fa-table mr-1"></i>Account Information</div>
<div class="card-body">
    <div class="table-responsive">
        <form method="post" enctype="multipart/form-data">
            <input onclick="areYouSure()" type="submit" name="delete_account" class="btn btn-danger" value="Delete account">
        </form>
    </div>
</div>
<script>
    function areYouSure() {
        alert("Are You Sure?");
    }
</script>
<?php
if (isset($_POST['delete_account'])) {

    $delete_account = $connection->prepare("DELETE FROM users WHERE id = ?");
    $delete_account->bind_param("i", $_SESSION['id']);
    $delete_account->execute();

    $function->redirect('http://appdev/public/login.php');

    $delete_account->close();
}
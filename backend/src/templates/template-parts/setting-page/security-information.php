<?php
// Update user password
if (isset($_POST['editSecurity'])) {

    $pass = md5($_POST['pass']);

    $editSecurity = $connection->prepare("UPDATE users SET password = ? WHERE id = ?");
    $editSecurity->bind_param("si", $pass, $_SESSION['id']);
    $editSecurity->execute();
    $editSecurity->close();

}
?>
<div class="card-header"><i class="fas fa-table mr-1"></i>Security Information</div>
<div class="card-body">
    <div class="table-responsive">
        <button type="button" class="btn btn-primary btn-sm mt-2" name="genPass" data-toggle="modal" data-target="#securityInformation">Generate Password</button>
    </div>

    <div class="modal fade" id="securityInformation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Generate Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="copyPassword">New Password</label>
                            <input type="text" class="form-control" id="copyPassword" name="pass" value="<?php echo $function->password_generate(15).'\n'; ?>">
                        </div>

                        <button type="button" class="btn btn-primary btn-sm mt-2" onclick="copyToClipboard()">Copy your password</button>
                        <p id="copied" class="m-2"></p>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                            <button type="submit" id="updatePass" name="editSecurity" class="btn btn-primary btn-sm" title="You need to copy your password." disabled>Update password</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function copyToClipboard() {
        let copyPassword = document.getElementById("copyPassword");
        let msg = '<p class="text-info"><em><small>Password is copied. You can update your password.</small></em></p>';

        copyPassword.select();
        copyPassword.setSelectionRange(0, 99999);
        document.execCommand("copy");
        document.getElementById('copied').innerHTML = msg;

        document.getElementById("updatePass").disabled = false;
        document.getElementById("updatePass").title = '';
        document.getElementById("copyPassword").type = 'text';
    }
</script>
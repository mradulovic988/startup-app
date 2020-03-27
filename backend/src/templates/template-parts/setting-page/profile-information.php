<div class="card-header"><i class="fas fa-table mr-1"></i>Profile Information</div>
<div class="card-body">
    <div class="table-responsive">

        <?php

        // Select all data from the database regarding user profile
        $settings = $connection->prepare("SELECT * FROM users WHERE id = ?");
        $settings->bind_param("i", $_SESSION['id']);
        $settings->execute();

        $result = $settings->get_result();

        while ($row = $result->fetch_assoc()) { ?>
            <p class="mb-0">First Name: <span class="text-muted"><?php echo $row['fname']; ?></span></p>
            <p class="mb-0">Last Name: <span class="text-muted"><?php echo $row['lname']; ?></span></p>
            <p class="mb-0">Username: <span class="text-muted"><?php echo $row['username']; ?></span></p>
            <p class="mb-0">Email: <span class="text-muted"><?php echo $row['email']; ?></span></p>
            <p class="mb-0">Member since: <span class="text-muted"><?php echo strstr(str_replace('-', '/', $row['date']), ' ', true); ?></span></p>

        <?php }

        $settings->close();

        // Update data regarding user profile
        if (isset($_POST['editProfile'])) {
            $fname  = $_POST['fname'];
            $lname  = $_POST['lname'];
            $email  = $_POST['email'];

            $profileEdit = $connection->prepare("UPDATE users SET fname = ?, lname = ?, email = ? WHERE id = ?");
            $profileEdit->bind_param("sssi", $fname, $lname, $email, $_SESSION['id']);
            $profileEdit->execute();
            $profileEdit->close();
        }
        ?>
        <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#profileInformation">Edit Information</button>

        <div class="modal fade" id="profileInformation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Profile Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="profileInformation" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" name="fname" id="firstName" placeholder="<?php echo $_SESSION['fname']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" name="lname" id="lastName" placeholder="<?php echo $_SESSION['lname']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="<?php echo $_SESSION['username']; ?>" disabled>
                                <small id="username" class="form-text text-muted">You can change the username on every 30 days.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="<?php echo $_SESSION['email']; ?>" required>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="editProfile" id="editProfile" class="btn btn-primary">Save changes</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
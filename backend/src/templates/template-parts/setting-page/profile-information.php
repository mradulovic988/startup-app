<div class="card-header"><i class="fas fa-table mr-1"></i>Profile Information</div>
<div class="card-body">
    <div class="table-responsive">

        <?php

        $id_session = $_SESSION['id'];
        $settings = $connection->prepare("SELECT * FROM users WHERE id = ?");
        $settings->bind_param("i", $id_session);
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
        ?>
        <button type="button" class="btn btn-info mt-3">Edit Information</button>
    </div>
</div>
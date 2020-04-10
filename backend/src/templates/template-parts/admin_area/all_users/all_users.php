<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
		<tr>
            <th>Full Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Start date</th>
            <th>User role</th>
            <th>Upgrade role</th>
            <th>Delete</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
            <th>Full Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Start date</th>
            <th>User role</th>
            <th>Upgrade role</th>
            <th>Delete</th>
		</tr>
	</tfoot>
	<tbody>
	<?php
	$allUsers = $db->query('SELECT id, fname, lname, username, email, date, user_role FROM users ORDER BY id DESC')->fetchAll();

	foreach ($allUsers as $allUser) { ?>
		<tr>
			<td><?= $allUser['fname'] . ' ' . $allUser['lname'] ?></td>
			<td><?= $allUser['username'] ?></td>
			<td><?= $allUser['email'] ?></td>
			<td><?= $allUser['date'] ?></td>
			<td><?= ($allUser['user_role'] === 10) ? 'Admin' : 'Customer'; ?></td>
			<td>
                <a href="#" data-toggle="modal" class="upgradeBtn" data-target="#upgradeUserRole">Upgrade</a>
                <input type="hidden" name="db_id" value="<?= $allUser['id'] ?>" class="db_id">
            </td>
			<td><a href="#">Delete</a></td>
		</tr>
	<?php } ?>
		
	</tbody>
</table>

<?php include 'upgrade_user_role/user_role_form.php'; ?>
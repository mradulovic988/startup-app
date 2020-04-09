<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Username</th>
			<th>Email</th>
			<th>Start date</th>
			<th>User role</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Username</th>
			<th>Email</th>
			<th>Start date</th>
			<th>User role</th>
		</tr>
	</tfoot>
	<tbody>
	<?php
	$allUsers = $db->query('SELECT fname, lname, username, email, date, user_role FROM users ORDER BY id DESC')->fetchAll();

	foreach ($allUsers as $allUser) { ?>
		<tr>
			<td><?= $allUser['fname'] ?></td>
			<td><?= $allUser['lname'] ?></td>
			<td><?= $allUser['username'] ?></td>
			<td><?= $allUser['email'] ?></td>
			<td><?= $allUser['date'] ?></td>
			<td><?= ($allUser['user_role'] === 10) ? 'Admin' : 'Customer'; ?></td>
		</tr>
	<?php } ?>
		
	</tbody>
</table>
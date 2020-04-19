<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
		<tr>
            <th>Full Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Member Since</th>
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
            <th>Member Since</th>
            <th>User role</th>
            <th>Upgrade role</th>
            <th>Delete</th>
		</tr>
	</tfoot>
	<tbody>
	<?php
	$allUsers = $db->query('SELECT id, fname, lname, username, email, date, user_role FROM users ORDER BY id DESC')->fetchAll();

    /**
     * SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate
    FROM Orders
    INNER JOIN Customers
    ON Orders.CustomerID=Customers.CustomerID;
     */

	foreach ($allUsers as $allUser) { ?>
		<tr>
			<td><?= $allUser['fname'] . ' ' . $allUser['lname'] ?></td>
			<td><?= $allUser['username'] ?></td>
			<td><?= $allUser['email'] ?></td>
			<td><?= $allUser['date'] ?></td>
			<td><?= ($allUser['user_role'] === 10) ? 'Admin' : 'Customer'; ?></td>
			<td>
                <a href="#" data-toggle="modal" class="upgradeBtn" data-target="#upgradeUserRole">Upgrade</a>
                <input type="hidden" name="db_upgrade_id" value="<?= $allUser['id'] ?>" class="db_upgrade_id">
            </td>
			<td>
                <a href="#" data-toggle="modal" class="deleteBtn" data-target="#deleteUserRole">Delete</a>
                <input type="hidden" name="db_delete_id" value="<?= $allUser['id'] ?>" class="db_delete_id">
            </td>
		</tr>
	<?php } ?>
		
	</tbody>
</table>

<?php include 'upgrade_user_role/user_role_update_form.php'; ?>
<?php include 'delete_user_role/user_role_delete_form.php'; ?>
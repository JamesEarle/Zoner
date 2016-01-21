<div class='row'>
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>Users</h3>
			</div>
			<div class="panel-body">
				<table class="admin-table">
					<thead>
						<th>Name</th>
						<th>Email</th>
						<th>Landlord</th>
						<th>Date Created</th>
						<th></th>
					</thead>
					<tbody>
						<?php
							$users = DB::select(constant("ALL_USERS"));

							foreach($users as $u) {
								$uid = $u->id;

								echo "<tr class='admin-table-row'>";
								echo "<td>", $u->name, "</td>";
								echo "<td>", $u->email, "</td>";

								if($u->landlord) {
									echo "<td>Yes</td>";
								} else {
									echo "<td>No</td>";
								}

								echo "<td>", $u->created_at, "</td>";
							?>
								<td><a href="{{ URL('admin/users/detail', array('uid' => $uid)) }}">Modify</a></td>
								</tr>
							<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
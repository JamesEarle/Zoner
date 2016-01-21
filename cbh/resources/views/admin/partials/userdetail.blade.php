<div class='row'>
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>User Detail</h3>
			</div>
			<div class="panel-body">
				<ul>
					<?php 
						echo "<li>ID: $data->id</li>";
						echo "<li>Name: $data->name</li>";
						echo "<li>Email: $data->email</li>";
						if($data->subscriber) {
							echo "<li>Subscriber? Yes</li>";
						} else {
							echo "<li>Subscriber? No</li>";
						}

						if($data->landlord) {
							echo "<li>Landlord? Yes</li>";
						} else {
							echo "<li>Landlord? No</li>";
						}
						echo "<li>Date Joined: $data->created_at</li>";
						// TODO add delete and modify user.
					?>
				</ul>
			</div>
		</div>
	</div>
</div>
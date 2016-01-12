<?php include_once(app_path()."/queries.php"); ?>

<div class='row'>
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>Welcome Admins!</h3>
			</div>
			<div class="panel-body">
				<h4>Welcome to the Cross Border Housing Admin Control Panel.</h4>
				<p>
					Here you can modify all portions of the website. From altering existing posts, adding new ones, or modifying users and any additional backend details. Only current admin can modify the list of admin users.
				</p>
				<hr>
				<p>
					<h3>Statistics</h3>
					There are currently
					<?php
		                $count_users = count(DB::select(constant("ALL_USERS")));
		                $count_properties = count(DB::select(constant("ALL_PROPERTIES")));
		            ?>
		            <ul>
		            	<li><?php echo $count_users ?> users</li>
		            	<li><?php echo $count_properties ?> properties</li>
		            </ul>
				</p>
			</div>
			<div class="panel-body">
			</div>
		</div>
	</div>
</div>
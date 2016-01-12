<div class='row'>
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>Properties</h3>
			</div>
			<div class="panel-body">
				<table class="admin-table">
					<thead class="admin-table-headers">
						<th>Thumbnail</th>
						<th>Title</th>
						<th>Address</th>
						<th>Price</th>
						<th>Date Created</th>
					</thead>
					<tbody>
						<?php
							$properties = DB::select(constant("ALL_PROPERTIES"));

							foreach($properties as $p) {
								echo "<tr class='admin-table-row'>";
								$url = $p->{"featured-image"};
								echo "<td><img src='", "../".$p->{"featured-image"}, "'></td>";
								echo "<td>", $p->title, "</td>";
								echo "<td>", $p->address, ", ", $p->city, " ", $p->province, "</td>";
								echo "<td>", $p->price, "</td>";
								echo "<td>", $p->created_at, "</td>";
								echo "<td><a href='#'>Modify</a></td>";
								echo "</tr>";
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
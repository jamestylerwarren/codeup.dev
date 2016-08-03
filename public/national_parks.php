<?php
require __DIR__ . '/../Input.php';
require __DIR__ . '/../db_connect.php'; //Typically, you don't want to commit username/pw info to github
require __DIR__ . '/../public/format-size.php';


function pageController($dbc) {
	$sql = "SELECT * FROM national_parks";



	// Copy the query and test it in SQL Pro
	$page = Input::get('page', 1) < 0 ? 1 : Input::get('page', 1);
	$offset =  $page * 4 - 4;
	$sql .= " LIMIT 4 OFFSET $offset";

	// var_dump($sql);

	$parks = $dbc->query($sql)->fetchAll(PDO::FETCH_ASSOC);
	// $parks = $db(database connection)->query($sql)(querying sql database)->fetchAll(fetching all columns) (PDO object::FETCH_ASSOC = fetch associative array, meaning columns are named, not just numeric keys)


	// var_dump($parks);


	return [
	  'parks' => $parks,
	];


};

extract(pageController($dbc));
?>


<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>National Parks Database</title>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">


	<style>
		.panel-table {
			display:table;
		}
		.panel-table > .panel-heading {
			display: table-header-group;
			background: transparent;
		}
		.panel-table > .panel-body {
			display: table-row-group;
		}
		.panel-table > .panel-body:before,
		.panel-table > .panel-body:after {
			content:none;
		}
		.panel-table > .panel-footer {
			display: table-footer-group;
			background: transparent;
		}
		.panel-table > div > .tr {
			display: table-row;
		}
		.panel-table > div:last-child > .tr:last-child > .td {
			border-bottom: none;
		}
		.panel-table .td {
			display: table-cell;
			padding: 15px;
			border: 1px solid #ddd;
			border-top: none;
			border-left: none;
		}
		.panel-table .td:last-child {
			border-right: none;
		}
		.panel-table > .panel-heading > .tr > .td,
		.panel-table > .panel-footer > .tr > .td {
			background-color: #f5f5f5;
		}
		.panel-table > .panel-heading > .tr > .td:first-child {
			border-radius: 4px 0 0 0;
		}
		.panel-table > .panel-heading > .tr > .td:last-child {
			border-radius: 0 4px 0 0;
		}
		.panel-table > .panel-footer > .tr > .td:first-child {
			border-radius: 0 0 0 4px;
		}
		.panel-table > .panel-footer > .tr > .td:last-child {
			border-radius: 0 0 4px 0;
		}
	</style>
</head>
<body>
	<h1>National Parks Database</h1>
		<div class="container" style="margin-top:40px">
			<div class="row">
				<table class="table table-striped table-hover table-bordered">
				  	<thead>
					  	<tr>
						  	<th>
							  	<a href="?sort_by=team">Name</a>
						  	</th>
						  	<th>
							  	<a href="?sort_by=stadium">Location</a>
						  	</th>
						  	<th>
							  	<a href="?sort_by=league">Date Established</a>
						  	</th>
						   	<th>
							  	<a href="?sort_by=league">Size in Acres</a>
						  	</th>
					  	</tr>
				  	</thead>
				  	<tbody>
				  		<?php foreach ($parks as $park) { ?>
				  		<tr>
							<td><?= $park['name'] ?></td>
							<td><?= $park['location'] ?></td>
							<td><?= $park['date_established'] ?></td>
							<td><?= $park['area_in_acres'] ?></td>
				  		</tr>
				  		<?php }; ?>
				  	</tbody>
				  	<tfoot>
				  		<tr>
						  	<td colspan="4">
						  	<!-- The values in this pagination control indicate you're currently viewing page 2 -->
							  	<nav aria-label="Page navigation" class="text-center">
								  	<ul class="pagination">
									  	<li>
										  	<a href="?page=1" aria-label="Previous">
											  	<span aria-hidden="true">&laquo;</span>
									  		</a>
									  	</li>
									  	<li><a href="?page=1">1</a></li>
									  	<li><a href="?page=2">2</a></li>
									  	<li><a href="?page=3">3</a></li>
									  	<li>
											<a href="?page=3" aria-label="Next">
												<span aria-hidden="true">&raquo;</span>
											</a>
									  	</li>
								  	</ul>
							  	</nav>
					  		</td>
				 		</tr>
					</tfoot>
				</table>
			</div>
		</div>







	<!-- jQuery -->
	<script src="js/jquery.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Plugin JavaScript -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/cbpAnimatedHeader.js"></script>
</body>
</html>
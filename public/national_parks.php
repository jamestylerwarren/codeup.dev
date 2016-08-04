<?php
require __DIR__ . '/../Input.php';
require __DIR__ . '/../db_connect.php'; //Typically, you don't want to commit username/pw info to github



function pageController($dbc) {

	$name = '';
	$location = '';
    $date_established = '';
    $area_in_acres = '';
    $description = '';

    if (Input::isPost()) {
        $name = Input::get('name');
        $location = Input::get('location');
        $date_established = Input::get('date_established');
        $area_in_acres = Input::get('area_in_acres');
        $description = Input::get('description');
        // var_dump("Name: {$name}");
        // var_dump("Location: {$location}");
        // var_dump("Date: {$date_established}");
        // var_dump("Area: {$area_in_acres}");
        // var_dump("Description: {$description}");
        
        $stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)');
        
	    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
	    $stmt->bindValue(':location',  $location,  PDO::PARAM_STR);
	    $stmt->bindValue(':date_established',  $date_established,  PDO::PARAM_STR);
	    $stmt->bindValue(':area_in_acres',  $area_in_acres,  PDO::PARAM_STR);
	    $stmt->bindValue(':description',  $description,  PDO::PARAM_STR);

	    $stmt->execute();
    }

    $sql = "SELECT * FROM national_parks";
	// Copy the query and test it in SQL Pro
	$page = Input::get('page', 1) < 0 ? 1 : Input::get('page', 1);
	$offset =  $page * 4 - 4;
	$sql .= " LIMIT 4 OFFSET $offset";

	// var_dump($page);
	// var_dump($sql);

	$parks = $dbc->query($sql)->fetchAll(PDO::FETCH_ASSOC);
	// $parks = $dbc(database connection)->query($sql)(querying sql database)->fetchAll(fetching all columns) (PDO object::FETCH_ASSOC = fetch associative array, meaning columns are named, not just numeric keys)
	
	// var_dump($parks);

	return [
	  'parks' => $parks,
	  'page' => $page,
	  'name' => $name,
	  'location' => $location,
	  'date_established' => $date_established,
	  'area_in_acres' => $area_in_acres,
	  'description' => $description
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
		<div class="container" style="margin-top:40px">
		<h1>National Parks Database</h1>
			<div class="row">
				<table class="table table-striped table-hover table-bordered">
				  	<thead>
					  	<tr>
						  	<th>
							  	<a href="?sort_by=name">Name</a>
						  	</th>
						  	<th>
							  	<a href="?sort_by=stadium">Location</a>
						  	</th>
						  	<th>
							  	<a href="?sort_by=league">Date Established</a>
						  	</th>
						   	<th>
							  	<a href="?sort_by=league">Area in Acres</a>
						  	</th>
						  	<th>
							  	<a href="?sort_by=league">Description</a>
						  	</th>
					  	</tr>
				  	</thead>
				  	<tbody>
				  		<?php foreach ($parks as $park) { ?>
				  		<tr>
							<td><?= $park['name'] ?></td>
							<td><?= $park['location'] ?></td>
							<td><?= $park['date_established'] ?></td>
							<td><?= number_format($park['area_in_acres'], 2) ?></td>
							<td><?= $park['description'] ?></td>
				  		</tr>
				  		<?php }; ?>
				  	</tbody>
				  	<tfoot>
				  		<tr>
						  	<td colspan="5">
						  	<!-- The values in this pagination control indicate you're currently viewing page 2 -->
							  	<nav aria-label="Page navigation" class="text-center">
								  	<ul class="pagination pagination-lg">
									  	<li class=<?php if ($page==1) { ?>"disabled"
									  		<?php } else { ?>""<?php }; ?>>
										  	<a href=<?php if ($page==1) { ?>
										  		""
										  	<?php } else { ?>"?page=1"<?php }; ?> aria-label="Previous">
											  	<span aria-hidden="true">&laquo;</span>
									  		</a>
									  	</li>
									  	<li><a href="?page=1">1</a></li>
									  	<li><a href="?page=2">2</a></li>
									  	<li><a href="?page=3">3</a></li>
									  	<li class=<?php if ($page==3) { ?>"disabled"
									  		<?php } else { ?>""<?php }; ?>>
										  	<a href=<?php if ($page==3) { ?>
										  		""
										  	<?php } else { ?>"?page=3"<?php }; ?> aria-label="Previous">
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
			<form method="post">
			<h1>Submit New National Park</h1>
			Name:<br>
			<input type="text" name="name" required value=""><br><br>
			Location:<br>
				<select name="location">
					<option value="AL">AL</option>
					<option value="AK">AK</option>
					<option value="AZ">AZ</option>
					<option value="AR">AR</option>
					<option value="CA">CA</option>
					<option value="CO">CO</option>
					<option value="CT">CT</option>
					<option value="DE">DE</option>
					<option value="DC">DC</option>
					<option value="FL">FL</option>
					<option value="GA">GA</option>
					<option value="HI">HI</option>
					<option value="ID">ID</option>
					<option value="IL">IL</option>
					<option value="IN">IN</option>
					<option value="IA">IA</option>
					<option value="KS">KS</option>
					<option value="KY">KY</option>
					<option value="LA">LA</option>
					<option value="ME">ME</option>
					<option value="MD">MD</option>
					<option value="MA">MA</option>
					<option value="MI">MI</option>
					<option value="MN">MN</option>
					<option value="MS">MS</option>
					<option value="MO">MO</option>
					<option value="MT">MT</option>
					<option value="NE">NE</option>
					<option value="NV">NV</option>
					<option value="NH">NH</option>
					<option value="NJ">NJ</option>
					<option value="NM">NM</option>
					<option value="NY">NY</option>
					<option value="NC">NC</option>
					<option value="ND">ND</option>
					<option value="OH">OH</option>
					<option value="OK">OK</option>
					<option value="OR">OR</option>
					<option value="PA">PA</option>
					<option value="RI">RI</option>
					<option value="SC">SC</option>
					<option value="SD">SD</option>
					<option value="TN">TN</option>
					<option value="TX">TX</option>
					<option value="UT">UT</option>
					<option value="VT">VT</option>
					<option value="VA">VA</option>
					<option value="WA">WA</option>
					<option value="WV">WV</option>
					<option value="WI">WI</option>
					<option value="WY">WY</option>
				</select><br><br>
				Date Established:<br>
				<input type="text" required name="date_established" placeholder="YYYY-MM-DD" value=""><br><br>

				Size:<br>
				<input type="text" required placeholder="Area in Acres" value="" name="area_in_acres"><br><br>

				Description:<br>
				<textarea id="description" name="description" value="" placeholder="Max 2000 characters" required></textarea><br><br>

				<button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true">
                    </span>
                    Submit
                </button><br>
			</form>
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
<?php
require __DIR__ . '/../Input.php';
require __DIR__ . '/../db_connect.php'; //Typically, you don't want to commit username/pw info to github



function pageController($dbc) {

	$name = '';
	$location = '';
	$date_established = '';
	$area_in_acres = '';
	$description = '';
	$errors = [];
	if (Input::isPost()) {

		try {
			$name = Input::getString('name'); //evaluating the input
		} catch (InvalidArgumentException $e) {
			$errors['name'] = "Invalid argument"; //pass various error messages into array $errors
		} catch (OutOfRangeException $e) {
			$errors['name'] = "Out of range exception";
		} catch (DomainException $e) {
			$errors['name'] = "Domain exception - not the correct type";
		} catch (RangeException $e) {
			$errors['name'] = "String length is less than min or greater than max";
		}


		try {
			$location = Input::getString('location'); //evaluating the input
		} catch (InvalidArgumentException $e) {
			$errors['location'] = "Invalid argument"; //pass various error messages into array $errors
		} catch (OutOfRangeException $e) {
			$errors['location'] = "Out of range exception";
		} catch (DomainException $e) {
			$errors['location'] = "Domain exception - not the correct type";
		} catch (RangeException $e) {
			$errors['location'] = "String length is less than min or greater than max";
		}


		try {
			$date_established = Input::getDate('date_established');
		} catch (Exception $e) {
			$errors['date_established'] = "Not a valid date";
		} catch (DateRangeException $e) {
			$errors['date_established'] = "Date is less than mix or greater than max";
		}


		try {
			$area_in_acres = Input::getNumber('area_in_acres'); //evaluating the input
		} catch (InvalidArgumentException $e) {
			$errors['area_in_acres'] = "Invalid argument"; //pass various error messages into array $errors
		} catch (OutOfRangeException $e) {
			$errors['area_in_acres'] = "Out of range exception";
		} catch (DomainException $e) {
			$errors['area_in_acres'] = "Domain exception - not the correct type";
		} catch (RangeException $e) {
			$errors['area_in_acres'] = "String length is less than min or greater than max";
		}


		try {
			$description = Input::getString('description'); //evaluating the input
		} catch (InvalidArgumentException $e) {
			$errors['description'] = "Invalid argument"; //pass various error messages into array $errors
		} catch (OutOfRangeException $e) {
			$errors['description'] = "Out of range exception";
		} catch (DomainException $e) {
			$errors['description'] = "Domain exception - not the correct type";
		} catch (RangeException $e) {
			$errors['description'] = "String length is less than min or greater than max";
		}

		// var_dump("Location: {$location}");
		// var_dump($date_established);
		// var_dump("Area: {$area_in_acres}");
		// var_dump("Description: {$description}");
		if (!$errors) {
			$stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)');
		
			$stmt->bindValue(':name', $name, PDO::PARAM_STR);
			$stmt->bindValue(':location', $location,  PDO::PARAM_STR);
			$stmt->bindValue(':date_established', $date_established->format('Y-m-d'), PDO::PARAM_STR);
			$stmt->bindValue(':area_in_acres', $area_in_acres,  PDO::PARAM_STR);
			$stmt->bindValue(':description', $description,  PDO::PARAM_STR);
			$stmt->execute();
		}
	}

	if ($date_established !== "") {
		$date_established = $date_established->date;
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
		# code...
	

	return [
	  'parks' => $parks,
	  'page' => $page,
	  'name' => $name,
	  'location' => $location,
	  'date_established' => $date_established,
	  'area_in_acres' => $area_in_acres,
	  'description' => $description,
	  'errors' => $errors 
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
				<input type="text" name="name" required value="<?= $name ?>"><?= (!empty($errors['name'])) ? $errors['name'] : ""; ?><br><br>
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
				<input type="text" required name="date_established" placeholder="YYYY-MM-DD" value="<?= $date_established ?>"><?= (!empty($errors['date_established'])) ? $errors['date_established'] : ""; ?><br><br>
				Size:<br>
				<input type="text" required placeholder="Area in Acres" name="area_in_acres" value="<?= $area_in_acres ?>"><?= (!empty($errors['area_in_acres'])) ? $errors['area_in_acres'] : ""; ?><br><br>

				Description:<br>
				<textarea id="description" name="description" placeholder="Max 2000 characters" required><?= $description ?></textarea><?= (!empty($errors['description'])) ? $errors['description'] : ""; ?><br><br>

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
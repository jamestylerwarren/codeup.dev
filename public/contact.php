<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://bootswatch.com/readable/bootstrap.css">
	</head>
	<body>
		<div class="container">
		<div class="row">
			
				<div class="well well-sm">
					<form>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="name">
									Name</label>
								<input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
							</div>
							<div class="form-group">
								<label for="email">
									Email Address</label>
								<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
									</span>
									<input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
							</div>
							<div class="form-group">
								<label for="subject">
									Subject</label>
								<select id="subject" name="subject" class="form-control" required="required">
									<option value="na" selected="">Choose One:</option>
									<option value="service">General Customer Service</option>
									<option value="suggestions">Suggestions</option>
									<option value="product">Product Support</option>
									<option value="other">Other</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="name">
									Message</label>
								<textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
									placeholder="Message"></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
								Send Message</button>
						</div>
					</div>
					</form>
				</div>
			
			</div>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>TEST</title>
		<link rel="stylesheet" type="text/css" href="/my_first_form.css">
	</head>
	<body>

		<h1 class="top_header">HTML & CSS TEST PAGE</h1>
		<form method="POST" action="/my_first_form.php">
			<h2>User Login</h2>
			
			<div>
				<label for="username">Username</label>
				<input placeholder="username here" id="username" name="username" type="text">
			</div>
			<div>
				<label for="password">Password</label>
				<input placeholder="password here" id="password" name="password" type="password">
			</div>
			<div>
				<button type="submit">SUBMIT</button> 
			</div>
		



			<h2>Compose an Email</h2>
			<div>
				<label for="to">To:</label>
				<input type="text" id="to" name="to" value="" placeholder="To:" autofocus>
			</div>
			<div>
				<label for="from">From:</label>
				<input type="text" id="from" name="from" value="" placeholder="From:">
			</div>
			<div>
				<label for="subject">Subject:</label>
				<input type="text" id="subject" name="subject" value="" placeholder="Subject:">
			</div>
			<div>
				<label for="email_body">Email Body:</label>
				<textarea id="email_body" placeholder="Content Here" name="email_body"></textarea>

				<input type="checkbox" id="save_to_sent_folder" name="save_to_sent_folder" value"yes" checked>

				<label for="save_to_sent_folder">Save to my sent folder</label>

				<br>
				<button type="submit">Send Email</button>
			</div>



			<h2>Multiple Choice Test</h2>
			<p>What is the capitol of the USA?</p>
			<div>
				<label>
					<input type="radio" name="q1" value="Austin">
					Austin
				</label>
				<label>
					<input type="radio" name="q1" value="San Francisco">
					San Francisco
				</label>
				<label>
					<input type="radio" name="q1" value="Kerrville">
					Kerrville
				</label>
				<label>
					<input type="radio" name="q1" value="Washingto DC">
					Washington DC
				</label>
				<button type="submit">Submit</button>
			</div>



			<p>Who will win the NBA title this year?</p>
			<div>		
				<label>
					<input type="radio" name="q2" value="Warriors">
					Warriors
				</label>
				<label>
					<input type="radio" name="q2" value="Cavs">
					Cavs
				</label>
				<button type="submit">Submit</button>
			</div>



			<div>
				<p>What do you want for lunch</p>
				<label><input type="checkbox" id="lunch1" name="lunch[]" value="Pizza"> Pizza</label>
				<label><input type="checkbox" id="lunch2" name="lunch[]" value="Burger">Burger</label>
				<label><input type="checkbox" id="lunch3" name="lunch[]" value="Salad"> Salad</label>
				<button type="submit">Submit</button>
			</div>



			<div>
				<label for="city">Which cities have you lived in?</label>
				<select id="city" name="city[]" multiple>
					<option value="San Antonio">San Antonio</option>
					<option value="Austin">Austin</option>
					<option value="New York">New York</option>
				</select>
				<button type="submit">Submit</button>
			</div>



			<div>
				<h2>Select Testing</h2>
				<p>Are you a meat popsicle?</p>
				<label for="meat_popsicle">YES or NO</label>
				<select id="meat_popsicle" name="meat_popsicle">
					<option value="1">YES</option>
					<option value="0">NO</option>
				</select>
				<button type="submit">Submit</button>
			</div>


		</form>
	</body>
</html>

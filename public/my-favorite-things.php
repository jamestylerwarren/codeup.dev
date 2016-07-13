<?php

function pageController() {

	$favThings = [];

	$favThings['things'] = ['big butts (I can\'t lie)', 'when you look in the mirror and you know you look stupid fly', 'law & order episodes (the original)', 'short phone conversations', 'Saturdays', 'anything but soft rock', 'free food', 'when stuff works the first time', 'when your jam comes on in da club', 'zebras'];

	return $favThings;

}

extract(pageController());
?>
<!DOCTYPE html>

<html>
<head>
	<title>Favorite Things</title>
</head>
<body>
	<table>
		<tr>
			<th>My Favorite Things</th>
		</tr>

		<?php foreach ($things as $thing) { ?>
			<tr><td><?= $thing; ?></td></tr>
		<?php } ?>

	</table>

</body>
</html>
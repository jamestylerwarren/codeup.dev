<?php

function pageController() {
	if (isset($_GET['score'])) {
		$score = $_GET['score'];
	} else {
		$score = 0;
	}
	return ['score' => $score];
}

extract(pageController());

?>
<!DOCTYPE html>

<html>
<head>
	<title>Pong</title>
</head>
<body>
	<h1>PONG</h1>
	<h1><?= $score; ?></h1>

	<a href="ping.php?score=<?= $score + 1 ?>">HIT</a>
	<a href="ping.php?score=<?= $score = 0 ?>">MISS</a>
</body>
</html>
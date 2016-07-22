<?php
require_once '../Input.php';

function pageController() {
	$score = Input::get('score', 0);
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
	<a href="ping.php?score=0">MISS</a>
</body>
</html>
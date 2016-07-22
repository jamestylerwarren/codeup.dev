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
	<title>Ping</title>
</head>
<body>
	<h1>PING</h1>
	<h1><?= $score; ?></h1>
	<a href="pong.php?score=<?= $score + 1 ?>">HIT</a>
	<a href="pong.php?score=0">MISS</a>
</body>
</html>
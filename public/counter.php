<?php




function pageController() {

	if (isset($_GET['count'])) {
		$count = $_GET['count'];
	} else {
		$count = 0;
	}
	return ['count' => $count];



}

extract(pageController());

?>
<!DOCTYPE html>

<html>
<head>
	<title>Counter</title>
</head>
<body>
	<h1><?= $count; ?></h1>

	<a href="counter.php?count=<?= $count + 1 ?>">UP</a>
	<a href="counter.php?count=<?= $count - 1 ?>">DOWN</a>
</body>
</html>
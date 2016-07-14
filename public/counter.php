<?php




function pageController() {
	$counter = [];
	$counter['count'] = 0;
	if (isset($_GET['count'])) {
		$counter['count']++;
	} else {
		$counter['count']--;
	}
	return $counter;



}

extract(pageController());

?>
<!DOCTYPE html>

<html>
<head>
	<title>Counter</title>
</head>
<body>
	<h1><?php echo $count; ?></h1>

	<a href="counter.php?up=<?= $count++ ?>">UP</a>
	<a href="counter.php?down=<?= $count-- ?>">DOWN</a>
</body>
</html>
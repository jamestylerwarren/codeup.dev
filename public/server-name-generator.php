<?php

$adjectives = ['crazy', 'salty', 'insane', 'noisy', 'hairy', 'misinformed', 'worthless', 'dumb', 'michevious', 'talkative'];

$nouns = ['cucumber', 'phone', 'wife', 'friend', 'food', 'codeup', 'store', 'dog', 'computer', 'car'];

function randomGenerator($adjectives, $nouns) {
	$noun = array_rand($nouns);
	$adjective = array_rand($adjectives);
	echo $adjectives[$adjective] . ' ' . $nouns[$noun];
}


?>
<!DOCTYPE html>

<html>
<head>
	<title>Random Generator</title>
</head>
<body>
	<h1><?php echo randomGenerator($adjectives, $nouns) ?></h1>
</body>
</html>
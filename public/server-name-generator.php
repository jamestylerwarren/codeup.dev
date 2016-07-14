<?php

$adjectives = ['crazy', 'salty', 'insane', 'noisy', 'hairy', 'misinformed', 'worthless', 'dumb', 'michevious', 'talkative'];

$nouns = ['cucumber', 'phone', 'wife', 'friend', 'food', 'codeup', 'store', 'dog', 'computer', 'car'];

function randomGenerator($adjectives, $nouns) {
	$noun = array_rand($nouns);
	$adjective = array_rand($adjectives);
	return ['adjective' => $adjectives[$adjective], 'noun' => $nouns[$noun]];
}

extract(randomGenerator($adjectives, $nouns));

?>
<!DOCTYPE html>

<html>
<head>
	<title>Random Generator</title>
</head>
<body>
	<h1><?= $adjective . ' ' . $noun ?></h1>
</body>
</html>
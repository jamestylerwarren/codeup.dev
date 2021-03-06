<?php
function pageController()
{
    $adjectives = ['awesome', 'legendary', 'great', 'cool', 'amazing'];
    shuffle($adjectives);
    $randomAdjectives = array_shift($adjectives);

    $noun = ['php', 'javascript', 'css', 'html', 'mysql'];
    shuffle($noun);
    $randomNouns = array_shift($noun);


    return ['randomAdjectives' => $randomAdjectives, 
            'randomNouns' => $randomNouns,
    ];
}
extract(pageController());
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        rel="stylesheet"
        href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"
    >
    <title>Server name generator</title>
</head>
<body>
<h1><?= $randomAdjectives ?> <?= $randomNouns ?></h1>
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js">
</script>
</body>
</html>
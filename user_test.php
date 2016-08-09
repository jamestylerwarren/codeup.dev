<?php

require_once __DIR__ . '/User.php';



// $user = new User();
// $user->name = 'Allison';
// $user->email = 'allison@gmail.com';
// $user->password = 'aneill';
// $user->save();

$user = User::find(1);
$user->email = 'tyler@capsulefeeders.com';
$user->save();






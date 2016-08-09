<?php

require_once __DIR__ . '/User.php';



// $user = new User();
// $user->name = 'Tyler';
// $user->email = 'warrejt@yahoo.com';
// $user->password = 'Vagrant';
// $user->save();

$user = User::find(1);
$user->email = 'tyler@capsulefeeders.com';
$user->save();






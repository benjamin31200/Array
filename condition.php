<?php

$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)];
$indyWeapon = NULL;

echo $opponentWeapon;

if ($opponentWeapon == 'fists') {
    $indyWeapon = 'gun';
} elseif ($opponentWeapon == 'whip') {
    $indyWeapon = 'fists';
} elseif ($opponentWeapon == 'gun') {
    $indyWeapon = 'whip';
} 

echo $indyWeapon;


 
?>
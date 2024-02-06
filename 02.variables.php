<?php

$name = "Luis"; //String
$age = 40; //Int
$hasMoney = false; //boolean
$cashOnHand = 10.01; //float

echo $name . 'is ' . $age . ' years old'; //Concat with single quotes
echo "$name is $age years old"; //use var with about quote in string
echo "${name} is ${age} years old"; // little cleaner way to do it

$x = '5' + '5';
var_dump($x) //it wont concatinate it will give 10 in JS it would give 55

//const var
define("HOST", "localhost")



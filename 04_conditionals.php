<?php

/*
    same as js

    < less than
    > greater
    <= less than or equal
    >= greater than or equal
    == equal to 
    === identical to 
    != not equal to
    !== not identical to
*/

$age = 50

//if, elseif, else
if($age >= 18) {
    echo "You are old";
} elseif($age <= 18 && $age > 0) {
    echo "god";
} else {
    echo "Sorry, you are not old enough to vote";
}

$posts = ["First Post"];

//empty() checks if something is empty
if(empty($posts)) {
    echo "Hey"
}

//terney
echo !empty($posts) ? $post[0] : "No Post";

$favcolor = "Blue";

//switch case
switch($favcolor) {
    case 'red':
        echo "Your fav color is red";
        break;
    default: 
        echo "your fav color isnt red"
}
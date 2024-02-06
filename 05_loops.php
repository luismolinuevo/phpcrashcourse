<?php

//for loop
for($x = 1; $x < 10; $x==) {
    echo $x;
}

//while
$x = 1;

while($x <= 15) {
    echo "Number " . $x . "<br>";
    $x = $x + 1;
}

$posts = ["First Post", "Second Post"];

//loop through array. count() is how you get length of array
for($i = 0; $i < count($posts);$x++) {
    echo $posts[$i];
}

//for each loop
foreach($posts as $post) {
    echo $post;
}

//with index
foreach($posts as $index => $post) {
    echo $index . " - " . $post . "<br>";
}
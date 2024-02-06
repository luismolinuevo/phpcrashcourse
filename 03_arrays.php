<?php
    //simple array ways to make array
    $numbers = [1, 44, 55, 22];
    $fruits = array("apple", "luis", "bob");

    echo $fruits[1];

    //Associative Array. Like a object in JS
    $colors = [
        1 => 'red',
        4 => 'blue',
        6 => 'green'
    ];

    $hex = [
        'red' => '$f00', 
        'blue' => '#0f0',
        'green' => '$00f'
    ];

    echo $hex['red'];

    //you could put arrays in this
    $people = [
        [
            'first_name' => 'Luis'
        ],
        [
            'last_name' => 'Molinuevo'
        ],
        [
            'email' => 'luis@gmail.com'
        ]
    ];

    echo $people[1]['last_name']; //could just print certain element
    var_dump(json_encode($people));




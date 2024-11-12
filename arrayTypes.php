<?php

####################################
##### There are 3 array types ######
####################################

//Indexed array
// where the index is numerical from 0 and on.
$language = ["PHP", "JavaScript", "Phyton", "Go"];

//Associative array
//where the index is a string instead of a numerical one.
$countries = [
    "country" => "USA",
    "states" => 50,
    "population" => "334.9 Mlln"
];


//Multi-dimensional array
//It can have nested objects inside of an array
$countries_multi =[
        [
        "country" => "USA",
        "currency" => "dollar",
        "population" => "334.9 Mlln"
        ],
        [
        "country" => "England",
        "currency" => "Pound sterling",
        "population" => "57.7 Mlln"
        ],
        [       
        "country" => "Germany",
        "currency" => "The euro",
        "population" => "84.7  Mlln"
        ]
    ];

    echo json_encode($countries_multi, JSON_PRETTY_PRINT);
?>
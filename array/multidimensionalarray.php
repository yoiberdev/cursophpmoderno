<?php

$beers = [
    [
        "name" => "Erdinger",
        "alcohol" => 8.5,
        "country" => "Alemania"
    ],
    [
        "name" => "Erdinger 2",
        "alcohol" => 8.5,
        "country" => "Alemania"
    ]
];

// echo $beers[1]["name"];

foreach($beers as $beer){
    foreach($beer as $key => $value){
        echo $key.": ".$value."<br>";
    }
}
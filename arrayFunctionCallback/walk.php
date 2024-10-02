<?php 
require "modelsArray/functions.php";

$numbers = [1, 2, 3, 4, 5];

// $numbersX2 = array_map(fn  (&$num) => $num * 2, $numbers);

array_walk($numbers, function($num){
    echo $num."<br>";
});


array_walk($numbers, fn (&$num) => $num *= 2);

show($numbers);
// show($numbersX2);
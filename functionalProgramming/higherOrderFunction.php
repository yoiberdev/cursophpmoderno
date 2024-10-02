<?php 
$const = 5;

$some = function(float $a, float $b) use($const): float {
    return $a + $b + $const;
};

$sum = fn (float $a, float $b) => $a + $b;

function mul(float $a, float $b): float{
    return $a * $b;
}

function show(callable $fn, float $a, float $b){
    echo $fn($a, $b);
}
/*
show(fn ($a, $b) => $a - $b,
         3, 5);*/
         
show($some, 4, 5);
<?php 

function add(float $number){

    return function($number2) use($number){
        return $number + $number2;
    };
}

function hi(){
    $count = 0;

    return function() use(&$count){
        $count++;
        return "Hola $count";
    };
}

$s1 = add(10);
$s2 = add(50);
$h1 = hi();
$h2 = hi();
echo $h1()."<br>";
echo $h1()."<br>";
echo $h1()."<br>";
echo $h2();
echo $h1()."<br>";
// echo $s2(20)."<br>";
// echo $s2(10);

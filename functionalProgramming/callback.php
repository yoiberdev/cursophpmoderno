<?php 

$numbers = [1,2,3,4,5,6];

function process(array $arr, callable $fun): array{
    $newArr = [];

    foreach($arr as $element){
        $newElement = $fun($element);
        $newArr[] = $newElement;
    }
 
    return $newArr;
}

$result1 = process($numbers, fn ($e) => $e * 2);
print_r($result1);


$result2 = process($numbers, fn ($e) => $e + 10);
print_r($result2);


$result3 = process($numbers, fn ($e) => "El valor es: ".$e);
print_r($result3);


$result4 = process($numbers, fn ($e) => "<b>".$e."</b>");
print_r($result4);
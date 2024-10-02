<?php 

function showNames(...$names){
    foreach($names as $name){
        echo $name."<br>";
    }
}

// showNames("Ana", "Juan", "Pedro","Karla");
function pipe(...$funcs){
    return function ($value) use ($funcs) {
        foreach($funcs as $fn){
            $value = $fn($value);
        }

        return $value;
    };
}

$toUpper = fn ($s) => strtoupper($s);
$replaceSpace = fn($s) => str_replace(" ","", $s);
$replaceNumbers = fn($s) =>  preg_replace('/\d+/u', '', $s);

$myPipe = pipe($toUpper, $replaceSpace, $replaceNumbers);
$result = $myPipe("abcd ef1891 gh");
echo $result;
<?php 

require "modelsArray/people.php";
require "modelsArray/functions.php";

use ModelsArray\People;

$people = [new People("Juan", 20), 
    new People("Pedro", 30), 
    new People("María", 25)];

$names = array_map(fn ($person) => $person->name, $people);
show($names);
// show($people);

$namesWithFormat = array_map(fn ($person) 
    => "<b style='color: red'>".$person->name."</b>", 
    $people);

show($namesWithFormat);

$namesWithNumber = array_map(fn ($person, $index) 
    => ($index + 1)." - ".$person->name
    , $people,  array_keys($people)
);

show($namesWithNumber);


$namesWithNumber2 = array_map(fn ($person, $index) 
    => ["id" => ($index + 1), "name" => $person->name]
    , $people,  array_keys($people)
);

show($namesWithNumber2);

echo $namesWithNumber2[1]["name"];
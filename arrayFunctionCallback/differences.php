<?php
require "modelsArray/people.php";
require "modelsArray/functions.php";

use ModelsArray\People;

$people1 = [new People("Juan", 20),
    new People("Mario", 20),
    new People("Pedro", 30), 
    new People("María", 25)];

$people2 = [new People("Juan", 20), 
    new People("Pedro", 30), 
    new People("Ana", 31),
    new People("Luis", 25)];

//echo ("Juan" <=> "Pedro"). "<br>";
//echo ("Juan" <=> "Juan"). "<br>";
//echo ("Pedro" <=> "Juan"). "<br>";

$differences = array_udiff($people1, $people2,
  fn ($person1, $person2) 
    => $person1->name <=> $person2->name);

show($differences); 

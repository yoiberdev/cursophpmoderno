<?php 
require "modelsArray/people.php";
use ModelsArray\People;

$people = [new People("Juan", 20), 
    new People("Pedro", 30), 
    new People("María", 25)];

$sum = array_reduce($people,
    fn ($current, $person) => $current + $person->age,
    0);

// echo $sum;

$namesPipe = array_reduce($people,
    fn ($current, $person) => $current.$person->name."|",
    "");

echo $namesPipe;

$contentHTML = array_reduce($people, 
   fn ($current, $person) => 
    $current."<li>".$person->name."</li>",
   "<ul>");

$contentHTML.= "</ul>";

echo $contentHTML;

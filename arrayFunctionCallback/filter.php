<?php 
require "modelsArray/people.php";
require "modelsArray/functions.php";

use ModelsArray\People;

$people = [new People("Juan", 20), 
    new People("Pedro", 30), 
    new People("María", 25)];

$greater25Years = array_filter($people, 
    fn ($person) => $person->age >= 25);

show($greater25Years);

$withoutPedro = array_filter($people,
    fn ($person) => $person->name != "Pedro");

show($withoutPedro);
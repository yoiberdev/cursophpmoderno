<?php 

$beer = new stdClass();

$beer->name = "Erdinger";
$beer->alcohol = 8.5;

$beer->name = "Erdinger Pikantus";
// echo $beer->name;

$arr = (array) $beer;

// echo $arr["alcohol"];

$arrLocation = [
    "address" => "Calle del Mal # 15",
    "country" => "México"
];

$objLocation = (object) $arrLocation;

print_r($objLocation);




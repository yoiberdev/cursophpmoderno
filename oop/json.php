<?php 

$beer = new Beer("Delirium Red", "Delirium", 8.5, true);

$json = json_encode($beer);
//echo $json;

$jsonBeer = '{"name":"Delirium Red","brand":"Delirium","alcohol":8.5,"isStrong":true}';
$objBeer = json_decode($jsonBeer);

// echo $objBeer->name;

$arr = [
    "name"=> "Héctor",
    "country" => "México"
];

$newJson = json_encode($arr);
//echo $newJson;

$newArr = json_decode($newJson, true);
echo $newArr["country"];


class Beer{
    public string $name;
    public string $brand;
    public float $alcohol;
    public bool $isStrong;

    public function __construct($name, $brand, $alcohol, $isStrong)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->alcohol = $alcohol;
        $this->isStrong = $isStrong;
    }
}
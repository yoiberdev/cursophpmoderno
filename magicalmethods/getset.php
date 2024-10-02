<?php

$person = new Person();
$person->name = "Juan";
echo $person->name;
echo $person->country;
$person->address = "Calle tal";
echo $person->address;

class Person{
    public int $id;
    public string $name;
    public array $data = [];

    public function __get($name){
        // echo "No existe $name en el objeto";
        return $this->data[$name];
    }

    public function __set($name, $value){
        // echo "No puedes agregar $value a $name";
        $this->data[$name] = $value;
    }
}
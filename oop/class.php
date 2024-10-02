<?php
declare(strict_types=1); 

$sale = new Sale(date("Y-m-d"));
$onlineSale = new OnlineSale(date("Y-m-d"), "Tarjeta");

$concept = new Concept("cerveza", 10.2);
$concept2 = new Concept("cerveza 2", 20.23);
$sale->addConcept($concept);
$sale->addConcept($concept2);


class Sale{
    protected float $total;
    private string $date;
    private array $concepts;
    public static $count;

    public function __construct(string $date){
        $this->date = $date;
        $this->total = 0;
        $this->concepts = [];
        self::$count++;
    }

    public function addConcept(Concept $concept){
        $this->concepts[] = $concept;
        $this->total += $concept->amount;
    }

    public function getTotal(): float{
        return $this->total;
    }

    public function getDate(): string{
       
        return $this->date;
    }

    public function setDate(string $date){
        if(strlen($date) > 10 || strlen($date) < 10){
            echo "La fecha es incorrecta";
        }
        $this->date = $date;
    }

    public static function reset(){
        self::$count = 0;
       
    }

    public function createInvoice(): string{
        return "Se crea la factura";
    }

    public function __destruct()
    {
        // echo "Se ha eliminado el objeto";
    }
}

class OnlineSale extends Sale{
    public $paymentMethod;

    public function __construct(string $date,
        string $paymentMethod){
     
        parent::__construct($date);
        $this->paymentMethod = $paymentMethod;
    }

    public function showInfo(): string{
        return "La venta tiene un monto de: $this->total";
    }
}

class Concept {
    public string $description;
    public float|int $amount;

    public function __construct(string $description, 
        int|float $amount) {

        $this->description = $description;
        $this->amount = $amount;
    }
}
<?php 

interface IStragegy {
    public function get(): array;
}

class ArrayStrategy implements IStragegy {
    private array $data = 
        ["Titulo 1", "Titulo 2", "Titulo 3"];
    
    public function get(): array {
        return $this->data;
    }
}

class UrlStrategy implements IStragegy {

    private string $url;

    public function __construct(string $url) {
        $this->url = $url;
    }

    public function get(): array {
        $data = file_get_contents($this->url);
        $arr = json_decode($data, true);
        return array_map(fn ($item) => $item["title"], $arr);
    }
}

class InfoPrinter {
    private IStragegy $strategy;

    public function __construct(IStragegy $strategy) {
        $this->strategy = $strategy;
    }

    public function print(){
        $content = $this->strategy->get();
        foreach($content as $item){
            echo $item . "<br>";
        }
    }
}

$arrayStrategy = new ArrayStrategy();
$urlStrategy = new UrlStrategy("https://jsonplaceholder.typicode.com/posts");
$infoPrinter = new InfoPrinter($urlStrategy);
$infoPrinter->print();
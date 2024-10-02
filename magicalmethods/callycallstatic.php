<?php 
$engine = new Engine("log.txt");
$engine->error("un error ocurrio");
$engine->log("el usuario ha hecho lo siguiente");
$engine->warning("Un alerta!");
// $engine->run("name", "some", true);
// Engine::some();

class Engine{
    private $fileName;
    public function __construct($fileName){
        $this->fileName = $fileName;
    }

    public function __call($name, $args) {
        echo "Llamando al método '$name' "
            ."con los argumentos: " . implode(', ', $args) . "\n";
        $message = $name.": ";
        $message .= $args[0]." - ";
        $message .= date("Y-m-d H:i:s")."\n";

        if(!file_exists($this->fileName)){
            file_put_contents($this->fileName, "");
        }

        file_put_contents($this->fileName, $message, FILE_APPEND);

    }

    public static function __callStatic($name, $args){
        echo "Llamando al método '$name' "
            ."con los argumentos: " . implode(', ', $args) . "\n";

    }
}
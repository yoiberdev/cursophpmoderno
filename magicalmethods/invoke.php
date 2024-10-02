<?php 

class Add{
    public function __invoke($a, $b){
        return $a * $b;
    }
}

class Validator{
    private int $min;
    private int $max;
    public $error;

    public function __construct(int $min, int $max) {
        $this->min = $min;
        $this->max = $max;
    }

    public function __invoke($text){
        $long = strlen($text);

        if ($long < $this->min || $long > $this->max) {
            $this->error = "El texto es muy pequeño o muy grande";
            return false;
        } 

        return true;

    }
}


$add = new Add();
// echo $add(2,4);
$val = new Validator(1,20);
if($val("askjhdaaasdasdasdasdassdasdasa")){
    echo "todo bien";
}else{
    echo $val->error;
}
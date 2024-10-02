<?php 

interface OpInterface{
    public function calculate(float $a, float $b): float;
}

class Sum implements OpInterface{
    public function calculate(float $a, float $b): float{
        return $a + $b;
    }
}

class Mul implements OpInterface{
    public function calculate(float $a, float $b): float{
        return $a * $b;
    }
}

class Sub implements OpInterface{
    public function calculate(float $a, float $b): float{
        return $a - $b;
    }
}

class Calculator{
    private OpInterface $op;

    public function __construct(OpInterface $op)
    {
        $this->op = $op;
    }

    public function calculate(float $a, float $b): float{
        return $this->op->calculate($a, $b);
    }
   
}

$sum = new Sum();
$mul = new Mul();
$sub= new Sub();

$calculator = new Calculator($sum);
echo $calculator->calculate(4,5);
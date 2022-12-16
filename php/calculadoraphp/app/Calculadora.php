<?php

namespace App;

use ArithmeticError;

class Calculadora
{
    private $resultado;

    public function __construct()
    {
        $this->resultado = 0.0;
    }

    public function getResultado()
    {
        return $this->resultado;
    }

    public function setResultado($resultado)
    {
        $this->resultado = $resultado;

        return $this;
    }

    public function somar($a, $b)
    {
        $this->resultado = $a + $b;
    }
    
    public function subtrair($a, $b)
    {
        $this->resultado = $a - $b;
    }

    public function multiplicar($a, $b)
    {
        $this->resultado = $a * $b;
    }

    public function dividir($a, $b)
    {
        if($b == 0){
            throw new ArithmeticError("Impossivel operacao de divisao por zero");
        }
        $this->resultado = $a / $b;
    }
}
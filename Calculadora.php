<?php

class Calculadora {
    // propriedade/atributo
    public $resultado = 0;

    // funcao/metodo
    public function somar($valor1, $valor2) {
        $this->resultado = $valor1 + $valor2;
    }

    public function exibir() {
        echo $this->resultado;
    }
}

$objCalculadora = new Calculadora();
$objCalculadora->somar(10, 10);
$objCalculadora->exibir();

<?php

namespace Tests;

use App\Calculadora;
use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
    public function testSumar()
    {
        $calculadora = new Calculadora();
        $resultado = $calculadora->sumar(5, 5);
        $this->assertEquals(10, $resultado);
    }
}
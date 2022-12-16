<?php 

require_once(__DIR__ . '/../vendor/autoload.php');

use PHPUnit\Framework\TestCase;
use App\Calculadora;

final class CalculadoraTest extends TestCase
{
    private $calculadora;

    /**
     * @before
     */
    protected function setUp() : void
    {
        $this->calculadora = new Calculadora();
    }

    /**
     * @test
     */
    public function testSomarDoisElementos() : void
    {
        $a = 2.0;
        $b = 4.0;
        $this->calculadora->somar($a, $b);
        $this->assertEquals(4.0, $this->calculadora->getResultado());
    }

    /**
     * @test
     */
    public function testSubtrairDoisElementos() : void
    {
        $a = 4.0;
        $b = 2.0;
        $this->calculadora->subtrair($a, $b);
        $this->assertEquals(2.0, $this->calculadora->getResultado());
    }

    /**
     * @test
     */
    public function testMultiplicarDoisElementos() : void
    {
        $a = 4.0;
        $b = 2.0;
        $this->calculadora->multiplicar($a, $b);
        $this->assertEquals(8.0, $this->calculadora->getResultado());
    }

    /**
     * @test
     */
    public function testDividirDoisElementos() : void
    {
        $a = 4.0;
        $b = 4.0;
        $this->calculadora->dividir($a, $b);
        $this->assertEquals(1.0, $this->calculadora->getResultado());
    }

    /**
     * @test
     */
    public function testDivisaoPorZero() : void
    {
        $a = 4.0;
        $b = 0.0;
        $this->expectException(ArithmeticError::class);
        $this->expectErrorMessage("Impossivel operacao de divisao por zero");
        $this->calculadora->dividir($a, $b);
    }
}
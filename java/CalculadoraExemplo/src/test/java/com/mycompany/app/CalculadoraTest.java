package com.mycompany.app;

import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.Test;
import static org.junit.jupiter.api.Assertions.*;


public class CalculadoraTest {
    
    private Calculadora calculadora;
    
    public CalculadoraTest() {
        
        this.calculadora = new Calculadora();
    }
    
    @BeforeEach
    public void setUp() {
        this.calculadora.setResultado(0.0);
    }

    @Test
    public void testSomar() {
        double a = 2.0;
        double b = 2.0;
        this.calculadora.somar(a, b);
        assertEquals(4.0, this.calculadora.getResultado());
    }

    @Test
    public void testSubtrair() {
       double a = 3.0;
        double b = 2.0;
        this.calculadora.subtrair(a, b);
        assertEquals(1.0, this.calculadora.getResultado());
    }

    @Test
    public void testMultiplicar() {
        double a = 2.0;
        double b = 2.0;
        this.calculadora.multiplicar(a, b);
        assertEquals(4.0, this.calculadora.getResultado());
    }

    @Test
    public void testDividirValoresComuns() {
        double a = 4.0;
        double b = 4.0;
        this.calculadora.dividir(a, b);
        assertEquals(1.0, this.calculadora.getResultado());
    }
    
    @Test
    public void testDivisaoPorZeroExcecao() {
        double a = 4.0;
        double b = 0.0;
        Exception exception = assertThrows(ArithmeticException.class, () ->
            this.calculadora.dividir(a, b));
        assertEquals("Impossivel realizar operacao de divisao por zero", exception.getMessage());
    }
}

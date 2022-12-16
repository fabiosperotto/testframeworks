
package com.mycompany.app;


public class Calculadora {
    
    private double resultado;

    public Calculadora() {
        this.resultado = 0.0;
    }
    
    public double getResultado(){
        return this.resultado;
    }
    
    public void setResultado(double r){
        this.resultado = r;
    }
    
    public void somar(double a, double b){
        this.resultado = a + b;
    }
    
    public void subtrair(double a, double b){
        this.resultado = a - b;
    }
    
    public void multiplicar(double a, double b){
        this.resultado = a * b;
    }
    
    public void dividir(double a, double b) throws ArithmeticException{
        
        if(b == 0) throw new ArithmeticException("Impossivel realizar operacao de divisao por zero");
        this.resultado = a / b;
    }
}

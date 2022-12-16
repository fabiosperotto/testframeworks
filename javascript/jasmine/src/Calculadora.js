function Calculadora() {
    var resultado;
    var operacao = {
        soma: function (num1, num2) {
            resultado = num1 + num2;
            return resultado;
        },
        subtracao: function (num1, num2){
            resultado = num1 - num2;
            return resultado;
        },
        multiplicacao: function (num1, num2){
            resultado = num1 * num2;
            return resultado;
        },
        divisao: function (num1, num2){
            if(num2 == 0) return 0;
            resultado = num1 / num2;
            return resultado;
        }
    }
    return operacao;
}

describe("Para a calculadora se espera que ", function () {
    refCalculadora = new Calculadora();
    
    it(" ela garanta que ao fazer a soma de 1 + 1 retorne 2", function () {

        expect(refCalculadora.soma(1, 1)).toBe(2);
    });

    it(" ela garanta que ao fazer a subtração de 1 - 1 retorne 0", function(){
        expect(refCalculadora.subtracao(1,1)).toBe(0);
    });
    
    it(" ela garanta que ao fazer a multiplicação de 2 * 2 retorne 4", function(){
        expect(refCalculadora.multiplicacao(2,2)).toBe(4);
    });

    it(" ela garanta que ao fazer a divisão de 1 / 1 retorne 1", function(){
        expect(refCalculadora.divisao(1,1)).toBe(1);
    });

    it(" ela garanta que ao fazer a divisão de 1 / 0 retorne 0", function(){
        expect(refCalculadora.divisao(1,0)).toBe(0);
    });
});




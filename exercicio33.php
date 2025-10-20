<?php
/**************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2A
Componentes:
 25142481-2 - Isabelli Azevedo
 25324764-2 - Gabriel Diniz
 25016187-2 - Michel Bueno Chacon
 25127107-2 - Tiago Joslin
Data: 08 de Outubro de 2025
Descritivo: Procedimento - Crie um procedimento mostrarTabuada que receba um 
número e imprima sua tabuada de 1 a 10.
**************************/

// Definição do procedimento (função sem retorno) chamado mostrarTabuada.
// Ele recebe um número ($num) como parâmetro e imprime a tabuada desse número.
function mostrarTabuada($num) {

    // Exibe um título informando de qual número será a tabuada
    echo "Tabuada do $num:\n";

    // Estrutura de repetição "for" que vai de 1 até 10
    // $a começa em 1, a cada repetição soma 1, e para quando chegar a 10
    for ($a = 1; $a <= 10; $a++) {

        // Calcula o resultado da multiplicação do número recebido ($num)
        // pelo valor atual do contador ($a)
        $result = $num * $a;

        // Exibe a operação completa no formato:
        // Exemplo: "7 x 1 = 7"
        echo "$num x $a = $result\n";
    }
}

// Exemplo de chamada do procedimento
// Aqui estamos passando o número 7 como argumento,
// então a função vai imprimir a tabuada do 7 de 1 a 10.
mostrarTabuada(7);
?>

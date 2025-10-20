<?php
    /**************************
    Curso: Engenharia de Software
    Disciplina: Linguagem e Técnicas de Programacão
    Professor: Flores
    Turma: ESOFT-2A
    Componentes:
    25142481-2 - Isabelli Azevedo
    25324764-2- Gabriel Diniz
    25016187-2- Michel Bueno Chacon 
    25127107-2-Tiago Joslin
    Data: 08 de Outubro de 2025
    Descritivo: Elabore uma função ehPrimo que receba um número e retorne true se ele for primo e false caso contrário.
    ***************************/
function ehPrimo($numero) {
    if ($numero < 2) {
        return false; // Números menores que 2 não são primos
    }

    // Verifica se o número tem algum divisor além de 1 e ele mesmo
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false; // Encontrou um divisor, não é primo
        }
    }

    return true; // Não encontrou divisores, é primo
}

// Exemplo de uso
$numero = 13;
if (ehPrimo($numero)) {
    echo "O número $numero é primo.";
} else {
    echo "O número $numero não é primo.";
}
?>

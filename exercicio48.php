<?php
    /**********
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
    Descritivo: : Escreva uma função fatorial que receba um número e retorne seu fatorial.
    *********/

function fatorial($n) {
    if ($n < 0) {
        return null; // Fatorial não definido para números negativos
    }

    if ($n === 0 || $n === 1) {
        return 1;
    }

    $resultado = 1;
    for ($i = 2; $i <= $n; $i++) {
        $resultado *= $i;
    }

    return $resultado;
}

// Exemplo de uso
$numero = 5;
echo "Fatorial de $numero é: " . fatorial($numero) . "\n";

?>

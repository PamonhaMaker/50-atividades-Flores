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
    Descritivo: : Procedimento: Crie um procedimento contagemRegressiva que receba um número e imprima uma contagem regressiva a partir dele até 0.
    ***************************/
function contagemRegressiva($numero) {
    for ($i = $numero; $i >= 0; $i--) {
        echo $i . PHP_EOL;
    }
}
contagemRegressiva(10)
?>

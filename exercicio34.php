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
    Data: 20 de Outubro de 2025
    Descritivo: Elabore um procedimento verificarParImpar que receba um número e imprima se ele é "Par" ou "Ímpar".
    ***************************/
$numero = 3

function verificarParImpar($numero) {
    if ($numero % 2 == 0) {
        echo "O número $numero é Par.";
    } else {
        echo "O número $numero é Ímpar.";
    }
}

// Chamando o procedimento com um exemplo
verificarParImpar(7);
?>

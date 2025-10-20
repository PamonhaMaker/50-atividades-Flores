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
    Descritivo: Crie uma matriz 3x3 (array de arrays) e preencha-a com números. Imprima o elemento da segunda linha e terceira coluna.
    ***************************/
$matriz = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

// Acessando o elemento da segunda linha e terceira coluna
// (lembrando que o índice começa em 0)
$elemento = $matriz[1][2];

echo "O elemento da segunda linha e terceira coluna é: " . $elemento;
?>

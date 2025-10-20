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
    Descritivo: : Crie um array de frutas. Escreva um código que verifique se a fruta "Maçã" existe no array.
    *********/
    

// Array de frutas
$frutas = array("Banana", "Laranja", "Maçã", "Uva", "Abacaxi");

// Verifica se "Maçã" está no array
if (in_array("Maçã", $frutas)) {
    echo "A fruta Maçã está na lista.\n";
} else {
    echo "A fruta Maçã NÃO está na lista.\n";
}

?>

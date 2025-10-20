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
    Descritivo: Dado o array [10, 2, 5, 8, 1], ordene-o em ordem crescente usando sort().
    ***************************/
$numeros = array(10, 2, 5, 8, 1);

// Ordenando o array em ordem crescente
sort($numeros);

// Exibindo os números ordenados
echo "Array em ordem crescente:<br>";
foreach ($numeros as $num) {
    echo $num . "<br>";
}
?>

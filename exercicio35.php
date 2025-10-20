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
    Descritivo: : Procedimento com Array: Crie um procedimento imprimirArray que receba um array e imprima todos os seus elementos.
    ***************************/
function imprimirArray($array) {
    foreach ($array as $elemento) {
        echo $elemento." ";
    }
}
$Array = [10, 20, 30];
imprimirArray($Array);
?>

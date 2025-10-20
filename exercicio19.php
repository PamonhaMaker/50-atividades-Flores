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
    Descritivo: : FOREACH: Usando o array de números do exercício 17, calcule e imprima a soma de todos os números com foreach.
    ***************************/
$num = [10, 25, 7, 42, 33, 18, 60, 5, 91, 12];
$soma = 0;
foreach ($num as $num){
    $soma += $num;
}
echo "A soma de todos os números do array resultam em: $soma";
?>

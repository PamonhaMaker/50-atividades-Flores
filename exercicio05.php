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
    Descritivo: Crie um programa que calcule e imprima a soma dos números de 1 a 100.    
***************************/
    
$s = 0;

for ($a = 1; $a <= 100; $a++) {
    $s += $a;
}

echo "A soma dos números de 1 a 100 é: $s\n";
?>

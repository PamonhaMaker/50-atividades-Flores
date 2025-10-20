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
    Descritivo: : Escreva um programa que leia números do usuário até que ele digite 0 e, no final, mostre a soma de todos os números digitados.
    ***************************/
$total = 0;
while (true) {
    $nota = readline ("Digite mais notas ou 0 para encerrar: \n");
    if ($nota == 0) break;
    $total += $nota;
}

if ($total > -10)
 echo "A soma das notas é: $total" . PHP_EOL;

?>

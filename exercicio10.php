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
    Descritivo: Crie um programa que conte quantos dígitos tem um número inteiro fornecido pelo usuário.
    ***************************/
echo 
$texto = readline("Digite um número: ");

$contador = 0;
$numeros = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];

foreach (str_split($texto) as $digito) {
    if (in_array($digito, $numeros)) {
        $contador++;
    }
}

echo "Quantidade de digitos: $contador";
?>

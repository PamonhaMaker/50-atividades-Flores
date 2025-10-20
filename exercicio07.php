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
    Descritivo: Escreva um programa que peça ao usuário para adivinhar um número e
    continue pedindo até que ele acerte
    ***************************/

$NumCorreto = 7;
$try = null;

echo "Tente adivinhar o número de 1 a 10.\n\n";

// Loop até o usuário acertar
do {
    echo "Digite seu palpite: ";
    $try= (int) fgets(STDIN); // Captura entrada do usuário como inteiro

    if ($try === $NumCorreto) {
        echo "Parabéns. Você acertou o número $NumCorreto!\n";
    } else {
        echo "Errou. Tente novamente.\n";
    }

} while ($try !== $NumCorreto);
?>

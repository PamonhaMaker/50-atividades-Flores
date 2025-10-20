<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2A
Componentes:
 25004000-1 - Ana Castela da Silva
 25004001-2 - Pedro Alvares Cabral
 25004001-3 - Roberto Carlos de Andrade
 25004001-4 - Sergio Roberto Gularte
 25004001-5 - Lauana Prado de Andrade
Data: 08 de Outubro de 2025
Descritivo: Crie um programa para encontrar e imprimir todos os números primos entre 1 e 50.
*******************************************************************************/
<?php

// Percorre os números de 2 até 50
for ($num = 2; $num <= 50; $num++) {
    $ehPrimo = true; // Assume que o número é primo

    // Verifica se o número tem divisores além de 1 e ele mesmo
    for ($div = 2; $div <= sqrt($num); $div++) {
        if ($num % $div == 0) {
            $ehPrimo = false; // Se for divisível, não é primo
            break;
        }
    }

    // Se continuar sendo primo, imprime
    if ($ehPrimo) {
        echo $num . "<br>";
    }
}
?>

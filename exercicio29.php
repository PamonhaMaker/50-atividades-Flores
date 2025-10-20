<?php
/**************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2A
Componentes:
 25142481-2 - Isabelli Azevedo
 25324764-2 - Gabriel Diniz
 25016187-2 - Michel Bueno Chacon
 25127107-2 - Tiago Joslin
Data: 08 de Outubro de 2025
Descritivo: FOREACH/IF - Dado um array de números [12, 5, 23, 18, 9, 45], 
imprima apenas os números maiores que 20.
**************************/

// Criação do array de números
$nums= array(12, 5, 23, 18, 9, 45);

// Percorre o array usando foreach
foreach ($nums as $num) {
    // Verifica se o número é maior que 20
    if ($num > 20) {
        echo $num . "\n";
    }
}
?>

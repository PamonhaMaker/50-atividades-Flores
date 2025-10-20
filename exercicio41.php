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
Descritivo: Função - Crie uma função chamada somar que receba dois números e 
retorne a soma deles.
**************************/

// Definição da função somar
// Esta função recebe dois parâmetros ($num1 e $num2)
// e retorna o resultado da soma entre eles.
function somar($num1, $num2) {
    // Realiza a soma dos dois números
    $result = $num1 + $num2;

    // Retorna o valor calculado
    return $result;
}

// Exemplo de chamada da função somar
// Aqui passamos os valores 8 e 12
$soma = somar(8, 12);

// Exibe o valor retornado pela função
echo "A soma de 8 e 12 é: " . $soma . "\n";
?>

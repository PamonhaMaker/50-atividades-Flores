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
Descritivo: Função com Array - Crie uma função obterPrimeiroElemento que receba 
um array e retorne seu primeiro elemento.
**************************/

// Definição da função obterPrimeiroElemento
// Ela recebe um array como parâmetro e retorna o primeiro elemento dele.
function obterPrimeiroElemento($array) {
    // Verifica se o array não está vazio
    if (count($array) > 0) {
        // Retorna o elemento que está na posição 0 (primeiro elemento)
        return $array[0];
    } else {
        // Caso o array esteja vazio, retorna uma mensagem ou valor nulo
        return null;
    }
}

// Exemplo de uso da função
$nums = array(10, 20, 30, 40, 50);

// Chama a função passando o array como argumento
$First = obterPrimeiroElemento($nums);

// Verifica se retornou um valor ou null e exibe a mensagem correspondente
if ($First !== null) {
    echo "O primeiro elemento do array é: " . $First . "\n";
} else {
    echo "O array está vazio.\n";
}
?>

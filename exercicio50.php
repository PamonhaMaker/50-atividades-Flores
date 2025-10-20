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
    Da: 08 de Outubro de 2025
    Descritivo: Crie uma função inverterString que receba uma string e a retorne invertida, sem usar a função strrev().
    ***************************/
// Definindo a função para inverter a string
function inverterString($texto) {
    $invertida = ""; // String que armazenará o resultado
    $tamanho = strlen($texto); // Obtém o tamanho da string

    // Percorre a string de trás para frente
    for ($i = $tamanho - 1; $i >= 0; $i--) {
        $invertida .= $texto[$i]; // Concatena o caractere na nova string
    }

    return $invertida; // Retorna a string invertida
}

?>

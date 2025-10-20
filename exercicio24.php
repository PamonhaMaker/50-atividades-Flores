<?php
    /**********
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
    Descritivo: : Usando o array de produtos do exercício 23, imprima o nome e o preço de cada produto.
    *********/

// Array de produtos
$produtos = array(
    array("nome" => "Notebook",     "preco" => 3500.00),
    array("nome" => "Smartphone",   "preco" => 2500.00),
    array("nome" => "Fone de Ouvido", "preco" => 199.90),
    array("nome" => "Monitor",      "preco" => 899.99),
    array("nome" => "Teclado",      "preco" => 150.00)
);

// Percorre o array e imprime nome e preço
foreach ($produtos as $produto) {
    echo "Nome: " . $produto["nome"] . " - Preço: R$ " . number_format($produto["preco"], 2, ',', '.') . "\n";
}

?>

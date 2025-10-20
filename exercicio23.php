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
    Descritivo: : Crie um array de produtos, onde cada produto é um array associativo com "nome" e "preço".
    *********/

// Array de produtos (cada produto é um array associativo)
$produtos = array(
    array("nome" => "Notebook",     "preco" => 3500.00),
    array("nome" => "Smartphone",   "preco" => 2500.00),
    array("nome" => "Fone de Ouvido", "preco" => 199.90),
    array("nome" => "Monitor",      "preco" => 899.99),
    array("nome" => "Teclado",      "preco" => 150.00)
);

// Exibindo os produtos
foreach ($produtos as $produto) {
    echo "Produto: " . $produto["nome"] . " - Preço: R$ " . number_format($produto["preco"], 2, ',', '.') . "\n";
}

?>

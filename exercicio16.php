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
    Descritivo: : Crie um array com 5 nomes de cidades.
    *********/

// Criando um array com 5 cidades
$cidades = array("São Paulo", "Rio de Janeiro", "Belo Horizonte", "Curitiba", "Salvador");

// Exibindo as cidades
foreach ($cidades as $indice => $cidade) {
    echo "Cidade " . ($indice + 1) . ": " . $cidade . "\n";
}

?>

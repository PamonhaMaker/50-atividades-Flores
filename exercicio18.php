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
    Descritivo: Usando o array de cidades do exercício 16, imprima cada cidade em uma nova linha usando foreach.
    ***************************/
// Criando o array com as cidades
$cidades = array("São Paulo", "Rio de Janeiro", "Belo Horizonte", "Curitiba", "Salvador");

// Usando foreach para percorrer e imprimir cada cidade
foreach ($cidades as $cidade) {
    echo $cidade . "<br>";
}
?>


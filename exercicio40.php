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
    Descritivo: : Faça um procedimento que receba um array associativo de um carro (marca, modelo, ano) e imprima seus dados.
     *********/

// Procedimento que recebe um array associativo e imprime os dados do carro
function imprimirDadosCarro($carro) {
    echo "Marca: " . $carro['marca'] . "\n";
    echo "Modelo: " . $carro['modelo'] . "\n";
    echo "Ano: " . $carro['ano'] . "\n";
}

// Exemplo de uso
$meuCarro = array(
    "marca" => "Toyota",
    "modelo" => "Corolla",
    "ano" => 2020
);

imprimirDadosCarro($meuCarro);
?>

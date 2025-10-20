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

// Criando um array com os 7 dias da semana
$diasSemana = array("Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado");

// Usando o laço for para percorrer o array
for ($i = 0; $i < count($diasSemana); $i++) {
    echo $diasSemana[$i] . "<br>";
}
?>

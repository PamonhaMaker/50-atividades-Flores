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
    Descritivo: Elabore um procedimento chamado calcularMediaAluno que receba duas notas e imprima a média e se o aluno foi "Aprovado" (média
>= 7) ou "Reprovado".
    ***************************/
function calcularMediaAluno($nota1, $nota2) {
    // Calcula a média
    $media = ($nota1 + $nota2) / 2;

    // Exibe a média
    echo "Média do aluno: " . $media . "<br>";

    // Verifica se foi aprovado ou reprovado
    if ($media >= 7) {
        echo "Situação: Aprovado";
    } else {
        echo "Situação: Reprovado";
    }
}

// Chamando o procedimento com valores de exemplo
calcularMediaAluno(8.5, 6.0);
?>

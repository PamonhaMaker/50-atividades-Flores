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
    Descritivo: Faça um programa que solicite uma senha ao usuário. O programa só deve continuar quando a senha correta ("1234") for digitada
    *********/

do {
    // Solicita ao usuário a senha
    echo "Digite a senha: ";
    
    // Lê a entrada do usuário
    $key = trim(fgets(STDIN));

    // Verifica se a senha está incorreta
    if ($key !== "1234") {
        echo "Senha errada. Tente novamente.\n";
    }

} while ($key !== "1234");

// Mensagem ao acertar a senha
echo "Senha correta. Acesso liberado.\n";
?>

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
Descritivo: Procedimento com Múltiplos Parâmetros - Crie um procedimento 
mostrarDados que receba nome, idade e cidade e os imprima de forma organizada.
**************************/

// Definição do procedimento mostrarDados
// Ele recebe três parâmetros: nome, idade e cidade
// e exibe essas informações de forma organizada no terminal.
function mostrarDados($name, $age, $city) {

    // Exibe um título para os dados
    echo "===== Dados da Pessoa =====\n";

    // Exibe o nome recebido como parâmetro
    echo "Nome: " . $name . "\n";

    // Exibe a idade recebida como parâmetro
    echo "Idade: " . $age . " anos\n";

    // Exibe a cidade recebida como parâmetro
    echo "Cidade: " . $city . "\n";

    // Linha de separação apenas para estética
    echo "===========================\n";
}

// Exemplo de chamada do procedimento
// Aqui passamos três valores: nome, idade e cidade
mostrarDados("Isabelli Azevedo", 19, "Curitiba");
?>

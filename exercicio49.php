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
Descritivo: Função - Faça uma função gerarArrayPares que receba um número n e 
retorne um array com todos os números pares de 0 até n.
**************************/

// Definição da função gerarArrayPares
// Essa função recebe um número inteiro ($n) e retorna um array
// contendo todos os números pares de 0 até esse número.
function gerarArrayPares($n) {
    // Inicializa um array vazio que armazenará os números pares
    $par = array();

    // Estrutura de repetição para percorrer de 0 até n
    for ($a = 0; $a <= $n; $a++) {
        // Verifica se o número atual ($i) é par
        if ($a % 2 == 0) {
            // Se for par, adiciona ao array $pares
            $par[] = $a;
        }
    }

    // Retorna o array contendo os números pares
    return $par;
}

// Exemplo de chamada da função
$result = gerarArrayPares(16);

// Exibe o array retornado
echo "Números pares de 0 até 16:\n";

// Percorre o array retornado e imprime cada número
foreach ($result as $num) {
    echo $num . " ";
}

echo "\n";
?>

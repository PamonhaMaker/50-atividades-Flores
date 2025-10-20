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
    Descritivo: Crie uma função maiorNumero que receba dois números e retorne o maior entre eles.
    ***************************/
// Definindo a função
function maiorNumero($num1, $num2) {
    if ($num1 > $num2) {
        return $num1;
    } else {
        return $num2;
    }
}

// Chamando a função e exibindo o resultado
$maior = maiorNumero(15, 8);
echo "O maior número é: " . $maior;
?>

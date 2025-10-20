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
    Descritivo: : Função com String: Crie uma função contarVogais que receba uma string e retorne o número de vogais.
    ***************************/
function contarVogais($texto) {
    $texto = strtolower($texto);
    $contador = 0;
for ($i = 0; $i < strlen($texto); $i++) {
        if (in_array($texto[$i], ['a', 'e', 'i', 'o', 'u'])) {
            $contador++;
        }
    }
    return $contador;
}
$frase = "Teste De Mesa"; // é pra sair 5
echo contarVogais($frase)
?>

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
    Descritivo: : Array Associativo: Crie um array com as notas de um aluno em 4 disciplinas e calcule a média.
    ***************************/
$notas = array("Matemática" => 7.0, "Biologia" => 9.4, "História" => 6.2, "Geografia" => 8.7);
$soma = 0;
foreach ($notas as $nota){
    $soma += $nota;
}
$media = $soma / count($notas);
echo "Média:".$media;
?>

<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2A
Componentes:
 25004000-1 - Ana Castela da Silva
 25004001-2 - Pedro Alvares Cabral
 25004001-3 - Roberto Carlos de Andrade
 25004001-4 - Sergio Roberto Gularte
 25004001-5 - Lauana Prado de Andrade
Data: 08 de Outubro de 2025
Descritivo: Escreva um programa que calcule a soma de dois números
*******************************************************************************/
$numero = 7;
$contador = 0;

if($numero > 50)
    echo "Apenas Menor que 50";
 else{  
    for($i=1; $i<=$numero; $i++){
        if($numero % $i == 0){
            $contador ++;
        }
    }

    if($contador == 2){
        echo "Primo";
    }
    else{
        echo "Não é primo";
    }
}
?>

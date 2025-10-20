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
    Descritivo: : Crie um menu de opções (1. Iniciar, 2. Parar, 3. Sair) e use do-while para mostrar o menu até que o usuário escolha "Sair".
    *********/

do {
    // Exibir o menu
    echo "\n=== MENU DE OPCOES ===\n";
    echo "1. Iniciar\n";
    echo "2. Parar\n";
    echo "3. Sair\n";
    echo "Escolha uma opcao: ";
    
    // Lê a entrada do usuário (do terminal)
    $opcao = trim(fgets(STDIN));

    // Verifica a opção escolhida
    switch ($opcao) {
        case 1:
            echo "Você escolheu INICIAR.\n";
            break;
        case 2:
            echo "Você escolheu PARAR.\n";
            break;
        case 3:
            echo "Encerrando o programa...\n";
            break;
        default:
            echo "Opção inválida. Tente novamente.\n";
    }

} while ($opcao != 3);

?>

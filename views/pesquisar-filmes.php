<?php

/**
 * Arquivo para renderizar na tela:
 */

echo "\n";
echo "................... Pesquisar Filmes .......................\n";
echo "\n";
echo "\n";
echo "1 = Ir para pesquisar por nome \n";
echo "2 = Ir para pesquisar por categoria \n";
echo "3 = Sair \n";
echo "\n";

$opcao = readline('Digite o número desejado do menu: ');
echo "opção: $opcao\n";
echo "\n";
echo "\n";
switch ($opcao) {
    case 1: # Tela para cadastro
        $nome_filme = readline('Nome do filme: ');
        $opcao_select = 1;
        echo "\n";
        include $dir_projetc .'controller/pesquisar_filmes.php';
        break;
    case 2: # Tela para cadastro
        $id_cat = readline('ID da Categoria: ');
        $opcao_select = 2;
        echo "\n";
        include $dir_projetc .'controller/pesquisar_filmes.php';
        break;
    case 3: # opção sair do programa
        include $dir_projetc .'views/sair.php';
        break;
    default:
        echo "Opção Errada (Escolha 1 a 4)";
        include$dir_projetc .'controller/fim_execucao.php';
    
} 
echo "\n";
echo "\n";

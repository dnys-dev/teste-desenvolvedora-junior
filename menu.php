<?php
$dir_projetc ="<local que deve ficar o endereço>" . "/"; # ex: $dir_projetc ="I:\Github\teste-desenvolvedora-junior";

include$dir_projetc .'connection/conexao_conn.php';
include$dir_projetc .'./class/db.php';
include$dir_projetc .'./function/readline.php';

echo "\n";
echo "\n";
echo "========== SISTEMA DE BUSCA DE FILMES ============\n";
echo "\n";
echo "..................... Menu .......................\n";
echo "\n";
echo "\n";
echo "1 = Cadastrar filmes \n";
echo "2 = Cadastrar categoria \n";
echo "3 = Pesquisar categoria cadastrada \n";
echo "4 = Pesquisar filmes por nome ou categoria \n";
echo "5 = Remover filmes \n";
echo "6 = Remover categoria \n";
echo "7 = Sair \n";
echo "------------ ";
echo "\n";
echo "\n";
$opcao = readline('Digite o número desejado no menu: ');
echo "opção: $opcao\n";
echo "\n";
switch ($opcao) {
    case 1:
        include $dir_projetc . 'views/cadastrar-filmes.php';
    break;
        case 2:
        include $dir_projetc .'views/cadastrar-categoria.php';
      break;
    case 3:
        include $dir_projetc .'views/pesquisar-por-categoria.php';
      break;
    case 4:
        include $dir_projetc .'views/pesquisar-filmes.php';
      break;
    case 5:
        include $dir_projetc .'views/remover-filmes.php';
      break;
    case 6:
        include $dir_projetc .'views/remover-categoria.php';
      break;
    case 7:
        echo "Bay bay ... Muito obrigado(a) por acessar o nosso sistema";
        echo "\n";
        exit();
     break;
    default:
        echo "Opção Errada (Escolha 1 a 7)"; 
        include $dir_projetc .'controller/fim_execucao.php';  
    } 
echo "\n";
echo "\n";

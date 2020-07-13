<?php

/**
 * Arquivo para renderizar na tela:
 */

echo "\n";
echo "................... Remover o Filme .......................\n";
echo "\n";
echo"Lista de todos os filmes Cadastrados com ID: ";
echo"\n";
echo"\n";
$nome_filme = "";
$tabela = "F.nome_filme";
# resultado da pesquisa com campo em branco
$pesquisa->filme($nome_filme, $tabela, $conn);
echo "\n";
echo "\n";
$id_filme = readline('ID do filme: ');
echo "\n";
include $dir_projetc .'controller/exluir_filme.php';
echo "\n";

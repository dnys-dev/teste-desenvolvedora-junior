<?php

/**
 * Arquivo para renderizar na tela:
 */

echo "\n";
echo "................... Cadastrar Filme .......................\n";
echo "\n";
echo "\n";
# Tela para cadastro
$nome_filme = readline('Nome do filme: ');
include $dir_projetc .'controller/cadastrar_filmes.php';
echo "\n";
echo "\n";

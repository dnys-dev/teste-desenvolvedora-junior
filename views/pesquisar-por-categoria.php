<?php

/**
 * Arquivo para renderizar na tela:
 */

echo "\n";
echo "................... Pesquisar por Categoria .......................\n";
echo "\n";
echo "\n";
# Tela para cadastro
$nome_cat = readline('Nome da categoria: ');
echo "\n";
include $dir_projetc .'controller/pesquisar_cat.php';
echo "\n";

<?php

/**
 * Arquivo para renderizar na tela:
 */

echo "\n";
echo "................... Cadastrar Categoria .......................\n";
echo "\n";
echo "\n";
# Tela para cadastro
$nome_cat = readline('Nome da categoria: ');
echo "\n";
include $dir_projetc .'controller/cadastrar_cat.php';
echo "\n";
echo "\n";

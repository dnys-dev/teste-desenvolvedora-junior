<?php

/**
 * Arquivo para renderizar na tela:
 */

echo "\n";
echo "................... Remover Categoria .......................\n";
echo "\n";
echo "\n";
$id_cat = readline('ID da categoria a ser excluida: ');
echo "\n";
include $dir_projetc .'controller/excluir_cat.php';
echo "\n";

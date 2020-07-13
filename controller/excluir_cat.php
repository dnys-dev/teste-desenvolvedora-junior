<?php

/**
 * externo:
 * @param string $id_cat: nome da categoria
 * @param $Conn: conexão com banco de dados.
 * 
 */

if ($consulta->consultaCatId($id_cat, $conn) == 0){ // criar
    echo "\n";
    echo"Categoria não encontrada...";
    echo "\n";
    echo"Lista de categorias cadastrada em ordem alfabetica: ";
    echo "\n";
    $pesquisa->Cat('',$conn);
    }

if ($consulta->consultaCatId($id_cat, $conn) == 1){
   
    if($pesquisa->quantCat($id_cat,$conn) != 0){  // mudar para ID
        echo"\n";
        echo"Categoria cadastrada em mais de um filme";
        echo "\n";
        echo"\n";
        echo"Filme(s) cadastrado nesta categoria: ";
        echo "\n";
        $tabela = "F.nome_filme OR F.id_categoria";
        # resultado da pesquisa com campo em branco, '' @param nome do filme.
        $pesquisa->filme($id_cat, $tabela ,$conn);

    } elseif($pesquisa->quantCat($id_cat,$conn) == 0) {
        echo"\n";
        $delete->Cat($id_cat,$conn); // mudar para ID  deletar categoria
    }   
}

mysqli_close($conn);
include $dir_projetc .'controller/fim_execucao.php';
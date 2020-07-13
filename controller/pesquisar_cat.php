<?php

/**
 * externo:
 * @param string $nome_cat : nome da categoria
 * @param $Conn : conexão com banco de dados.
 */

if ($nome_cat == ""){
    echo"Lista de todas as categorias cadastradas: ";
    echo"\n";
    echo"\n";
    $pesquisa->Cat('',$conn); # resultado da pesquisa com campo em branco
}  
if ($nome_cat != ""){
    if($consulta->consultaCatRelativo($nome_cat,$conn) == 0 ){
       echo"Nenhum categoria relacionado com este termo:  -- $nome_cat -- ";
       echo"\n";
    }else{
      echo"Categoria(as) relacionado a pesquisa -- $nome_cat -- ";
      echo"\n";
      echo"\n";
      $pesquisa->Cat($nome_cat,$conn);
      echo"\n";
    }
}

mysqli_close($conn);
include $dir_projetc .'controller/fim_execucao.php';
 

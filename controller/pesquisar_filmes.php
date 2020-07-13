<?php

/**
 * externo:
 * @param string $nome_filme: nome do filme
 * @param $Conn: conexão com banco de dados.
 */

switch ($opcao_select) {
    case 1: # Filme relacionado a pesquisa por nome 
        if ($nome_filme == ""){
            echo"Lista de todos os filmes Cadastrados: ";
            echo"\n";
            echo"\n";
            $nome_filme = "";
            $tabela = "F.nome_filme";
            # resultado da pesquisa com campo em branco
            $pesquisa->filme($nome_filme, $tabela, $conn);
        }  
        if ($nome_filme != ""){
            if($consulta->consultaFilmeRelativo($nome_filme,$conn) == 0 ){
                echo"Nenhum filme relacionado com este termo:  -- $nome_filme -- ";
                echo"\n";
            }else{
                echo"Filme(s) relacionado a pesquisa por categoria -- $nome_filme --";
                echo"\n";
                echo"\n";
                $tabela = "F.nome_filme";
                # resultado da pesquisar
                $pesquisa->filme($nome_filme, $tabela, $conn);
                echo"\n";
            }
        }
        break;
    case 2: # Filme relacionado a pesquisa por categoria
        if ($id_cat == ""){
            echo"Lista de todos filmes cadastrados: ";
            echo"\n";
            echo"\n";
            $nome_filme = "";
            $tabela = "F.nome_filme OR F.id_categoria";
            # resultado da pesquisa com campo em branco, '' @param nome do filme.
            $pesquisa->filme($nome_filme, $tabela ,$conn);
        }  
        if ($id_cat != ""){
            if($consulta->consultaCatId($id_cat,$conn) == 0 ){
               echo"Nenhum filme cadastrado com está categoria:  -- $id_cat -- ";
               echo"\n";
            }else{
              echo"Filme(s) relacionado a pesquisa por categoria -- $id_cat -- ";
              echo"\n";
              echo"\n";
              $tabela = "F.nome_filme OR F.id_categoria";
              # resultado da pesquisar
              $pesquisa->filme($id_cat, $tabela, $conn);
            }
        }
    }
mysqli_close($conn);
include $dir_projetc .'controller/fim_execucao.php';

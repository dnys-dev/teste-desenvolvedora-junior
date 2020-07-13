<?php

/**
 * externo:
 * @param string $nome_cat : nome da categoria
 * @param $Conn: conexão com banco de dados.
 * 
 * internos
 *  @param int $valor : quantidade de firmes a ser sedido aquela categoria.
 * 
 */

if($consulta->consultaCat($nome_cat,$conn) == 0){
    $valor = 0;
    # Inserir dado no tabela categorias
    $cadastrar->insertCat($nome_cat,$valor,$conn); 
    echo "Categoria cadastrada com sucesso!!! ";
    echo "\n";
} elseif($consulta->consultaCat($nome_cat,$conn) == 1){
    echo "Categoria já cadastrada! ";
    echo "\n";
}

mysqli_close($conn);
include$dir_projetc .'controller/fim_execucao.php';
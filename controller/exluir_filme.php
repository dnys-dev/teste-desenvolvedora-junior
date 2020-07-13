<?php

/**
 * externo:
 * @param string $id_filme: nome do filme
 * @param $Conn: conexão com banco de dados.
 */

if ($consulta->consultaFilmeId($id_filme,$conn) == 1){

    $id_cat = $pesquisa->idFilme($id_filme, $conn);
    $delete->filme($id_filme, $conn); # deletar o filme na tabela filmes.
    $estado = 0 ; # Estado 0, Subtrair.
    # inserir novo valor cadastrado na tabela categorias.
    $cadastrar->updateCatQuant($id_cat, $estado, $conn);
    echo"Finalizado a operação com sucesso!";
}else {
    echo"\n";
    echo"Filme não cadastrado.";
} 

mysqli_close($conn);
include$dir_projetc .'controller/fim_execucao.php';

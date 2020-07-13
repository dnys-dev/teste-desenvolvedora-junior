<?php

/**
 * externos:
 * @param string $nome_cat: nome da categoria
 * @param string $nome_filme: nome do filme
 * @param $Conn: conexão com banco de dados.
 * @param $quant_cat: quantidade de categoria que deseja cadastrar.
 * 
 * internos
 * @param int $valor : quantidade de firmes a ser sedido aquela categoria.
 * 
 */

$quant_cat = readline('Quantas categorias irá cadastrar: ');
# função para verificar se o cliente digitou número ou lestras.
if (!is_numeric($quant_cat)) {
    echo "Permitido apenas números";}
else {
    $quant_cat =  (int) $quant_cat;
}
echo"\n";
$pesquisa->Cat('',$conn); 
echo"\n";
echo"\n";
for ($i = 1; $i <= $quant_cat; $i++) {
    $id_cat = readline("Nome $i de $quant_cat categoria(as) escolhida(as), Digite o ID: ");
    echo"\n";
    if (
            $consulta->consultaFilme($nome_filme,$conn) == 1
            and 
            $consulta->consultaCatId($id_cat, $conn) == 0
        )
        {

        echo "Categoria não existente";
        echo"\n";
    } elseif
        (
            $consulta->consultaFilme($nome_filme,$conn) == 0
            and 
            $consulta->consultaCatId($id_cat,$conn) == 1  
        )
        {
             # Inserir dado no tabela filmes
            $cadastrar->insertFilme($nome_filme, $id_cat, $conn);
            $estado = 1; # Estado 1, acrescentar.
            # inserir novo valor cadastrado na tabela categorias
            $cadastrar->updateCatQuant($id_cat, $estado, $conn);
            echo "Cadastro do filme com sucesso!!!";
            echo"\n";
    } elseif
        (
            $consulta->consultaFilme($nome_filme,$conn) == 0
            and 
            $consulta->consultaCatId($id_cat,$conn) == 0
        )
        {
            echo "Categoria não existente!!!";
            echo"\n";
    } elseif
        (
            $consulta->consultaFilme($nome_filme,$conn) == 1
            and 
            $consulta->consultaCatId($id_cat,$conn) == 1
        )
        {
            echo "Filme cadastrado nesta categoria!!!";
            echo"\n";
   } else{
            echo "Finalizado! ";
            echo "\n";
   }
}

mysqli_close($conn);
include $dir_projetc .'controller/fim_execucao.php';
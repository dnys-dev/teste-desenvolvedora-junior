<?php

/**
 * externo:
 * @param $nome_cat: nome da categoria
 * @param $nome_filme: nome do filme
 * @param $estado: estado  1 para incremento + 1 e estado 0 desincremento - 1.
 * @param $id_filme: id do filme
 * @param $id_cat: id da categoria
 * @param $valor: a ser pesquisado.
 * @param $Conn: conexão com banco de dados.
 */

class cadastrar 
{
    public function insertCat($nome_cat, $valor, $conn) # inserir categoria ...
    { 
        $sql = "INSERT INTO categorias (nome_categoria, quantidade) VALUES ('$nome_cat', $valor)";
        mysqli_query($conn, $sql);

    }
    public function insertFilme($nome_filme, $id_cat, $conn) # inserir filme.  ...
    { 
        $sql = "INSERT INTO filmes (`nome_filme`, `id_Categoria`) VALUES ('$nome_filme', '$id_cat');";
        mysqli_query($conn, $sql);

    }
    # update no campo quantidade da tabela categorias ...
    public function updateCatQuant($id_cat, $estado, $conn)
    { 
        if($estado == 1){
            $sql = "UPDATE categorias SET quantidade =  quantidade + 1 WHERE id = '$id_cat' ";
        } elseif ($estado == 0){
        $sql = "UPDATE categorias SET quantidade =  quantidade - 1 WHERE id = '$id_cat' ";
        }
        mysqli_query($conn, $sql);
    }
}

class consulta
{
    public function consultaCat($nome_cat, $conn) # Consulta a categoria ...
    { 
        $sql = mysqli_query($conn,"select * from categorias where nome_categoria = '$nome_cat'") 
        or die("Erro -> Consulta a categoria");
        while($dados=mysqli_fetch_assoc($sql))
        {
            # somente um dado para comparar se tem informação de retorno ou não.
            $nome = $dados['nome_categoria']; 
        }
        if(empty($nome)){ 
            $saida = 0;
            return $saida;
        } else{
            $saida = 1;
            return $saida;
        }
    }
    public function consultaCatId($id_cat, $conn) # Consulta a categoria por ID ...
    { 
        $sql = mysqli_query($conn,"select * from categorias where id = '$id_cat'") 
        or die("Erro -> Consulta a categoria");
        while($dados=mysqli_fetch_assoc($sql))
        {
            # somente um dado para comparar se tem informação de retorno ou não.
            $nome = $dados['nome_categoria']; 
        }
        if(empty($nome)){ 
            $saida = 0;
            return $saida;
        } else{
            $saida = 1;
            return $saida;
        }
    }
    public function consultaFilme($nome_filme,$conn) # Consulta o filme ...
    { 
        $sql = mysqli_query($conn,"select * from filmes where nome_filme = '$nome_filme'") 
        or die("Erro -> Consulta o filme");
        while($dados=mysqli_fetch_assoc($sql))
        {        
            # somente um dado para comparar se tem informação de retorno ou não.
            $nome = $dados['nome_filme']; 
        }
        if(empty($nome)){ 
            $saida = 0;
            return $saida;
        } else{
            $saida = 1;
            return $saida;
        }
    }
    public function consultaFilmeId($id_filme,$conn) # Consulta o filme ID ...
    { 
        $sql = mysqli_query($conn,"select * from filmes where id = '$id_filme'") 
        or die("Erro -> Consulta o filme");
        while($dados=mysqli_fetch_assoc($sql))
        {        
            # somente um dado para comparar se tem informação de retorno ou não.
            $nome = $dados['nome_filme']; 
        }
        if(empty($nome)){ 
            $saida = 0;
            return $saida;
        } else{
            $saida = 1;
            return $saida;
        }
    }
    public function consultaFilmeRelativo($nome_filme, $conn)  # consulta de filmes resultado relativo
    { 
        $sql = mysqli_query($conn,"SELECT * FROM filmes WHERE nome_filme LIKE '%$nome_filme%'") 
        or die("Erro -> Consulta se tem alguma filme relativa.");
        while($dados=mysqli_fetch_assoc($sql))
        {
            # somente um dado para comparar se tem informação de retorno ou não.
            $nome = $dados['nome_filme'];  
        }
        if(empty($nome)){ 
            $saida = 0;
            return $saida;
        } else{
            $saida = 1;
            return $saida;
        }
    }
    public function consultaCatRelativo($nome_cat,$conn) # Consulta se tem alguma categoria relativa. ...
    { 
        $sql = mysqli_query($conn,"SELECT * FROM categorias WHERE nome_categoria LIKE '%$nome_cat%'") 
        or die("Erro -> Consulta se tem alguma categoria relativa.");
        while($dados=mysqli_fetch_assoc($sql))
        {
            # somente um dado para comparar se tem informação de retorno ou não.
            $nome = $dados['nome_categoria']; 
        }
        if(empty($nome)){ 
            $saida = 0;
            return $saida;
        } else{
            $saida = 1;
            return $saida;
        }
    }
}
class pesquisa{
    # Pesquisa por nome do filme com resultado relativo. ...
    public function filme($valor, $campo, $conn) 
    { 
        $sql_select = "SELECT F.*, C.*, F.Id AS IdFilme FROM filmes F LEFT JOIN categorias C ON C.Id=F.id_Categoria WHERE $campo LIKE '%$valor%' ";
        $sql = mysqli_query($conn, $sql_select) 
        or die("Erro -> Pesquisa por nome do filme com resultado relativo.");
        while($dados=mysqli_fetch_assoc($sql)){
            $nome = $dados['nome_filme'];
            $idFilme = $dados['IdFilme'];
            $idCategoria = $dados['id_categoria'];
            echo "> ID: $idFilme - " . $nome .  " | ID da Categoria: $idCategoria" . "\n";
        }      
    }
    public function quantCat($id_cat,$conn) # Pesquisa quantidade de filmes na categoria. ...
    { 
        $sql = mysqli_query($conn,"SELECT * FROM categorias WHERE id = '$id_cat'") 
        or die("Erro -> Pesquisa quantidade de filmes na categoria.");
        while($dados=mysqli_fetch_assoc($sql)){
            $quant_cat = $dados['quantidade']; 
        }
        return $quant_cat;
        echo "\n";
    }
    public function idFilme($valor, $conn) # Pesquisa por ID ...
    {   
        $sql_select = "SELECT F.*, C.*, C.Id AS IdFilmes FROM filmes F LEFT JOIN categorias C ON C.Id=F.id_Categoria WHERE F.id LIKE '$valor'";
        $sql = mysqli_query($conn, $sql_select)
        or die("Erro -> Pesquisa por nome do filme com resultado relativo.");
        while($dados=mysqli_fetch_assoc($sql)){
            $id = $dados['IdFilmes']; 
        }
        return $id;
        echo "\n";  
    }


    public function cat($nome_cat,$conn) # pesquisar categoria. ...
    { 
        $sql_select = "SELECT * FROM categorias WHERE nome_categoria LIKE '%$nome_cat%' ORDER BY nome_categoria ASC ";
        $sql = mysqli_query($conn, $sql_select) 
        or die("Erro -> Pesquisa por Categoria com resultado relativo.");
        while($dados=mysqli_fetch_assoc($sql)){
            $nome = $dados['nome_categoria'];
            $id = $dados['id'];
            echo "> " . $nome . ' | ID: ' . $id . "\n";
        }        

    }
}

class delete{

    public function cat($id_cat, $conn) # Delete a Categoria
    { 
        $sql = "DELETE FROM categorias WHERE id = '$id_cat'";
        if (mysqli_query($conn, $sql)) {
             echo "Excluido!!!";
             echo"\n";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    public function filme($id_filme, $conn) # Delete o filme ...
    { 
        $sql = "DELETE FROM filmes WHERE id = '$id_filme'";
        if (mysqli_query($conn, $sql)) {
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

$delete = new delete();
$pesquisa = new pesquisa();
$cadastrar = new cadastrar();
$consulta = new consulta();

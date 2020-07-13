<?php

$servidor = ""; # nome do servidor
$usuario = "";  # nome do usuario do banco de dados
$senha = ""; # senha do banco de 
$dbname = ""; # nome do banco de dados
    
//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
mysqli_set_charset($conn,'utf8');
	
if(!$conn){
        die("Falha na conexao: " . mysqli_connect_error());
}else{
    //echo "Conexao realizada com sucesso";
}

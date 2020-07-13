# Pasta da class

Todas as class do sistemas.

## db.php

Todos os metodos para realização ação com o banco de dados.

#### Class cadastrar

Métodos

* insertCat('nome da categoria', 'conexão db') inserir categoria.
* insertFilme('nome do filme', 'conexao db') inserir filme.
* updateCatQuant('nome da categoria', 'estado', 'conexao db') update no campo quantidade da tabela categorias.

#### Class consulta

Métodos

* consultaCat('nome da categoria', 'conexao db')  Consulta a categoria.
* consultaCatId('id da categoria', 'conexao db')  Consulta a categoria por id.
* consultaFilme('nome do filme', 'conexao db') Consulta o filme.
* consultaFilmeId('id do filme', 'conexao db') Consulta o filme
* consultaCatRelativo('nome da categoria', 'conexao db') Consulta se tem alguma categoria relativa.
* consultaFilmeRelativo('nome do filme', 'conexao db') Consulta se tem alguma filme relativa.


#### Class pesquisa

Métodos

* filme('valor da pesquisa', 'campo da pesquisa-> WHERE', 'conexao db') Pesquisa por nome do filme com resultado relativo.
* idFilme('valor', 'conexao db') Pesquisa por id com resultado
* cat('nome da categoria', 'conexao db') Pesquisa por categoria com resultado filme relativo.
* quantCat('id da categoria', 'conexao db') Pesquisa quantidade de filmes na categoria.


#### Class delete

Métodos

* cat('nome da categoria', 'conexao db') Delete a Categoria.
* filme('nome do filme', 'conexao db') deleteFilme.

## Lincença:

#### Licença Pública Geral GNU v3.0
As permissões desta licença copyleft forte estão condicionadas a disponibilizar o código fonte completo das obras e modificações licenciadas, que incluem obras maiores usando uma obra licenciada, sob a mesma licença. Os avisos de direitos autorais e licença devem ser preservados. Os colaboradores fornecem uma concessão expressa de direitos de patente.

#### Considerações finais
Sistema feito 💜 pela Daviny Vidal.

Github @davinyvidal

Repositório Github @daninyvidal/teste-desenvolvedora-junior

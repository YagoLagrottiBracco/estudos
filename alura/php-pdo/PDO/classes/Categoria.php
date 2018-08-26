<?php 

require_once 'classes/Conexao.php';

class Categoria {

    public $id;
    public $dados;

    public function modelo($metodo = null, $colunas = null, $tabela = null, $valores = null, $condicao = null){

        $conexao = Conexao::pegarConexao();

        switch ($metodo) {
            case 'select':
                $query = 'SELECT '.$colunas.' FROM '.$tabela.(is_null($condicao) ? '' : ' WHERE '.$condicao);
                return $conexao->query($query)->fetchAll();
                break;

            case 'insert':
                $query = 'INSERT INTO '.$tabela.' ('.$colunas.') VALUES ("'.$valores.'")'.(is_null($condicao) ? '' : ' WHERE '.$condicao);
                return $conexao->exec($query);
                break;

            case 'update':
                # code...
                break;

            case 'delete':
                # code...
                break;
        }
    }

    public function listar() {
        $lista = $this->modelo('select', 'id, nome', 'categorias');
        return $lista;
    }

    public function inserir() {
        return $this->modelo('insert', 'nome', 'categorias', $this->dados);
    }
}

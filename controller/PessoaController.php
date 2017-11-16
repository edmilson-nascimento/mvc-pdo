<?php

include_once '../model/Pessoa.php';
include_once '../model/PessoaDAO.php';
include_once '../model/Database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['method'])) { // aqui é onde vai decorrer a chamada se houver um *request* POST
    
    $method = filter_input(INPUT_POST, 'method');

    if (method_exists('PessoaController', $method)) {
        $pessoa = new PessoaController();
        $pessoa->$method();
        header('./');
    } else {
        echo 'Metodo incorreto';
    }
}

Class PessoaController {

    public function insere() {

        $nome = filter_input(INPUT_POST, 'nome');

        $conexao = new Database();

        $pessoa = new Pessoa();
        $pessoa->setNome($nome);

        $pessoaDao = new PessoaDAO();
        $pessoaDao->adiciona($conexao, $pessoa);
    }

}

?>
<?php

Class PessoaDAO {

    public function adiciona(Database $conexao, Pessoa $pessoa) {

        $stmt = $conexao->getConn();
        
        $insert = $stmt->prepare("INSERT INTO PESSOA (nome) VALUES (:nome)");
        $insert->bindParam(':nome', $pessoa->getNome());
        
        $insert->execute();
        $insert->closeCursor();
        $conexao->disconnect();
    }

}

?>
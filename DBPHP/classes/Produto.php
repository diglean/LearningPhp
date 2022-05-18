<?php

require 'Conexao.php';

class Produto{
    private $conexao;

    public function __construct(){
        $con = new Conexao();
        $this->conexao = $con->getConexao('sqlite');
    }

    public function listar(){

        $sql = 'select * from produto';
        $q = $this->conexao->prepare($sql);
        $q->execute();
        return $q;

    }
}
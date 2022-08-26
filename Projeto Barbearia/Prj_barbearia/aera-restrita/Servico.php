<?php

class Servico{
    private $idServico;
    private $descServico;

    public function getidServico(){
        return $this->idServico;
    }
    public function getdescServico(){
        return $this->descServico;
    }
    public function setidServico($id){
        $this->idServico = $id;
    }
    public function setdescServico($desc){
        $this->descServico = $desc;
    }
    public function cadastrar($servico){
        $conexao = Conexao::pegarConexao();
        $queryInsert = "INSERT INTO tbserviço (descServico)
                        VALUES ('".$servico->getdescServico()."')";
        
        $conexao->exec($queryInsert);
        
        return 'Cadastro realizado com sucesso';
    }

    public function cadastrar2($servico){
        $conexao = Conexao::pegarConexao();
        
        $stmt = $conexao->prepare("INSERT INTO tbserviço
                                     (descServico)
                                     VALUES(?)");

        $stmt->bindParam(1, $servico->getdescServico());
        $stmt->execute();

        return 'Cadastro realizado com sucesso';
    }

}
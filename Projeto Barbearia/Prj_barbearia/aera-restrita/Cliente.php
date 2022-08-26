<?php

class Cliente{
    private $idCliente;
    private $telefoneCliente;
    private $nomeCliente;
    private $cpfCliente;
    private $emailCliente;

    public function getIdCliente(){
        return $this->idCliente;
    }
    public function gettelefoneCliente(){
        return $this->telefoneCliente;
    }
    public function getNomeCliente(){
        return $this->nomeCliente;
    }
    public function getcpfCliente(){
        return $this->cpfCliente;
    }
    public function getEmailCliente(){
        return $this->emailCliente;
    }
    public function setIdCliente($id){
        $this->idCliente = $id;
    }
    public function settelefoneCliente($telefone){
        $this->telefoneCliente = $telefone;
    }
    public function setNomeCliente($nome){
        $this->nomeCliente = $nome;
    }
    public function setcpfCliente($cpf){
        $this->cpfCliente = $cpf;
    }
    public function setEmailCliente($email){
        $this->emailCliente = $email;
    }

    public function cadastrar($cliente){
        $conexao = Conexao::pegarConexao();
        $queryInsert = "INSERT INTO tbCliente (nomeCliente,telefoneCliente,cpfCliente, emailCliente)
                        VALUES ('".$cliente->getNomeCliente()."',
                                '".$cliente->gettelefoneCliente()."',
                                '".$cliente->getcpfCliente()."',
                                '".$cliente->getEmailCliente()."')";
        
        $conexao->exec($queryInsert);
        
        return 'Cadastro realizado com sucesso';
    }

    public function cadastrar2($cliente){
        $conexao = Conexao::pegarConexao();
        
        $stmt = $conexao->prepare("INSERT INTO tbCliente
                                     (nomeCliente,telefoneCliente,cpfCliente, emailCliente)
                                     VALUES(?,?,?,?)");

        $stmt->bindParam(1, $cliente->getNomeCliente());
        $stmt->bindParam(2, $cliente->gettelefoneCliente());
        $stmt->bindParam(3, $cliente->getcpfCliente());
        $stmt->bindParam(4, $cliente->getEmailCliente());
        $stmt->execute();

        return 'Cadastro realizado com sucesso';
    }

}
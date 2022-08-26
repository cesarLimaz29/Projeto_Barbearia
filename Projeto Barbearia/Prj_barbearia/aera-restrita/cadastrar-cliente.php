<?php 

    require_once 'global.php';

    try{
        header("Location: Cadastro.php");

        $cliente = new Cliente();
        $cliente->settelefoneCliente($_POST['txtTelefone']);
        $cliente->setNomeCliente($_POST['txtNome']);
        $cliente->setcpfCliente($_POST['txtCpf']);
        $cliente->setEmailCliente($_POST['txtEmail']);

        echo $cliente->cadastrar($cliente);
    }
    catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
    }

?>
<?php 

    require_once 'global_2.php';

    try{
        header("Location: Descricao.php");

        $servico = new Servico();
        $servico->setdescServico($_POST['txtdescServico']);
        echo $servico->cadastrar($servico);
    }
    catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
       
    }

?>
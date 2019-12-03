<?php 
    include 'classes/Planeta.php';

    $planeta = new Planeta();

    $planeta->id = $_POST['id'];
    $planeta->nome = $_POST['nome'];
    $planeta->sistema = $_POST['sistema'];
    $planeta->tamanho = $_POST['tamanho'];
    $planeta->tipo = $_POST['tipo'];
    $planeta->nseresvivos = $_POST['nseresvivos'];
    $planeta->coloracao = $_POST['coloracao'];
    $planeta->distancia = $_POST['distancia'];

    var_dump($planeta);


            $planeta->atualizaPlaneta();

            header("Location: consulta-planeta.php?v=2");
        
    
?>
<?php 
    include 'classes/Planeta.php';
    $planeta = new Planeta();

    $planeta->nome = $_POST['nome'];
    $planeta->sistema = $_POST['sistema'];
    $planeta->tamanho = $_POST['tamanho'];
    $planeta->tipo = $_POST['tipo'];
    $planeta->nseresvivos = $_POST['nseresvivos'];
    $planeta->coloracao = $_POST['coloracao'];
    $planeta->distancia = $_POST['distancia'];
    $foto = $_FILES['foto'];

    if(!empty($foto['name'])){
        if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto['type'])){
            header("Location: registro-planeta.php?e=1");
        }else{
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);

            $nome_imagem = md5(uniqid(time())).".".$ext[1];

            $caminho_imagem = "fotos/".$nome_imagem;

            move_uploaded_file($foto['tmp_name'], $caminho_imagem);

            $planeta->foto = $nome_imagem;

            $planeta->newPlaneta();

            header("Location: consulta-planeta.php");
        }


    }
    


?>

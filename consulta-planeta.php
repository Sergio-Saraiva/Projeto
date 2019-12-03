<?php 
    include 'cabecalho.php';
    include 'classes/Planeta.php';

    $planeta = new Planeta();
    $lista = $planeta->listarPlanetas();
?>

<div class="row">
    <?php foreach($lista as $elemento){ ?>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
            <img src="<?php echo 'fotos/'.$elemento['foto'] ?>" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><rect width="100%" height="100%" fill="#55595c"></rect></img>
            <div class="card-body">
                <h4 class="card-title">
                    Nome do Planeta:
                </h4>
                <p class="card-text"><?php echo $elemento['nome'] ?></p>
                <hr>
                <h4 class="card-title">
                    Sistema Solar:
                </h4>
                <p class="card-text"><?php echo $elemento['sistema'] ?></p>
                <hr>
                <h4 class="card-title">
                    Tipo:
                </h4>
                <p class="card-text"><?php echo $elemento['tipo'] ?></p>
                <hr>
                <h4 class="card-title">
                    Qtd de Seres Vivos:
                </h4>
                <p class="card-text"><?php echo $elemento['nseresvivos'] ?> Milhões </p>
                <hr>
                <h4 class="card-title">
                    Coloração:
                </h4>
                <p class="card-text"><div class="container-fluid"><div class="quadrado" style="background-color:<?php echo $elemento['coloracao'] ?>"></div></div></p>
                <hr>
                <h4 class="card-title">
                    Distancia da terra:
                </h4>
                <p class="card-text"><?php echo $elemento['distancia'] ?> Anos Luz</p>
                <hr>
                <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group flex-fill">
                    <a role="button" class="btn btn-sm btn-outline-secondary" href="form-atualiza-elemento.php?id=<?php echo $elemento['id'] ?>">Editar</a>
                    <a role="button" class="btn btn-sm btn-outline-secondary" href="apagar-planeta.php?id=<?php echo $elemento['id'] ?>">Apagar</a>
                </div>
                </div>
            </div>
            </div>
        </div>
        <?php } ?>
        </div>
<?php
    include 'rodape.php';
?>
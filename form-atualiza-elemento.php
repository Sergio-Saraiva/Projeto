<?php
    include 'cabecalho.php';
    include 'classes/Planeta.php';

    $planeta = new Planeta();
    $planeta->id = $_GET['id'];
    $elemento = $planeta->selecionaElemento();
?>

<h1>Registro de Planetas</h1>
        <form action="atualiza-planeta.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $elemento['id'] ?>">
            <div class="form-group">
                <label for="nome">Nome do planeta</label>
                <input class="form-control input-custom" type="text" name="nome" id="nome" value="<?php echo $elemento['nome'] ?>">
            </div>
            <div class="form-group">
                <label for="sist-solar">Sistema Solar</label>
                <input class="form-control input-custom" type="text" name="sistema" id="sist-solar" value="<?php echo $elemento['sistema'] ?>">
            </div>
            <div class="form-group">
                    <label for="tamanho">Tamanho (em km)</label>
                    <input class="form-control input-custom" type="number" name="tamanho" id="tamanho" value="<?php echo $elemento['tamanho'] ?>">
            </div>
            <div class="form-group">
                    <label for="exampleFormControlSelect1">Tipo</label>
                    <select class="form-control input-custom" id="exampleFormControlSelect1" name="tipo">
                      <option value="<?php echo $elemento['tipo'] ?>" selected><?php echo $elemento['tipo'] ?></option>
                      <option>Gasoso</option>
                      <option>Rochoso</option>
                      <option>Glacial</option>
                      <option>Super-Terra</option>
                      <option>Anão</option>
                    </select>
            </div>
            <div class="form-group">
                    <label for="nseresvivos">População</label>
                    <input class="form-control" type="number" name="nseresvivos" id="nseresvivos" value="<?php echo $elemento['nseresvivos'] ?>">
            </div>
            <div class="form-group">
                    <label for="coloracao">Coloração</label>
                    <input class="form-control input-custom" type="color" name="coloracao" id="coloracao" value="<?php echo $elemento['coloracao'] ?>">
            </div>
            <div class="form-group">
                    <label for="distancia">Distancia da Terra (em anos luz)</label>
                    <input class="form-control input-custom" type="number" name="distancia" id="distancia" value="<?php echo $elemento['distancia'] ?>">
            </div>
            <button type="submit" class="btn btn-dark">Finalizar</button>
        </form>